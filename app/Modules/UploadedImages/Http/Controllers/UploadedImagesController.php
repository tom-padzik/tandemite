<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Http\Controllers;

use App\Modules\UploadedImages\Http\Requests\ImageUploadRequest;
use App\Modules\UploadedImages\Repositories\Contracts\UploadedImageRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

use function sprintf;

readonly class UploadedImagesController
{
    public function __construct(
        private UploadedImageRepository $repository,
    ) {
    }

    public function index()
    {
        if (true !== Auth::check()) {
            Session::put('after_login_route', 'uploaded-images.index');
            return Redirect::route('login.get');
        }

        Session::remove('after_login_route');

        return View::make(
            'UploadedImages::index',
            ['uploaded' => $this->repository->all()->toArray()],
        );
    }

    public function upload(ImageUploadRequest $request): JsonResponse
    {
        $file = $request->file('file');
        $filename = sprintf(
            '%s.%s',
            Str::uuid()->toString(),
            $file->getClientOriginalExtension(),
        );

        $file->move(public_path('images'), $filename);

        $this->repository->create(
            name: $request->get('name'),
            surname: $request->get('surname'),
            image: $filename,
        );

        return new JsonResponse();
    }

    public function uploadForm(): \Illuminate\Contracts\View\View
    {
        return View::make('UploadedImages::upload');
    }
}