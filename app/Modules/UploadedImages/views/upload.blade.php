@extends('components.layouts.base')

@section('content')
    <table>
        <tr>
            <td>
                <form id="uploadForm">
                    @csrf
                    Name: <input type="text" name="name" required><br>
                    Surname: <input type="text" name="surname" required><br>
                    Image: <input type="file" name="file" required><br>
                    <input type="submit">
                    
                    <p style="display: none" id="success">Success: image uploaded</p>
                    
                </form>
            </td>
            <td>
                @if($uploaded ?? false)
                    <p style="color: red">Success, image uploaded</p>
                    <img src="{{ url('images/' . $uploaded['image'])}}" alt="image"/>
                    <p></p>
                @endif
            </td>
        </tr>
    </table>
    
@endsection

@section('inline_scripts')
    <script type="text/javascript">
        $("#success").hide();
        $('#uploadForm').on('submit', function (e) {
            $("#success").hide();
            e.preventDefault();
            const name = $("#uploadForm input[name=name]").val();
            const surname = $("#uploadForm input[name=surname]").val();
            const token = $("#uploadForm input[name=_token]").val();
            const file =  $("#uploadForm input[name=file]")[0].files[0];
            if (file.size > (2*1024*1024) || !file.type.startsWith('image/')) {
                alert('Error: Max file size is 2MB.');
                return;
            }
            const formData = new FormData();
            formData.append('name', name);
            formData.append('surname', surname);
            formData.append('_token', token);
            formData.append('file', file);
            $.ajax({
                url: "{{ route('uploaded-images.async-upload')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function () {
                    $("#success").show();
                    $("#uploadForm input[name=file]").val('');
                },
                error: function (data) {
                    alert('Error: ' + data);
                }
            });
        });
    </script>
@endsection