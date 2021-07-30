<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFileRequest;
use App\Repositories\UploadedFiles\UploadedFileRepository;
use Illuminate\Http\Request;

class UploadedFileController extends Controller
{
    public $fileRespository;

    public function __construct(UploadedFileRepository $fileRepository)
    {
        $this->fileRespository = $fileRepository;
    }

    public function index()
    {
        $files = $this->fileRespository->paginate()->sortBy(['created_at', 'desc']);

        return view('uploaded_files.index',compact('files'));
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $size = $file->getSize();
        $path = $file->storeAs('uploads', $file->getBasename().time().".".$file->getClientOriginalExtension());

        $this->fileRespository->create([
            'file_path' => $path,
            'file_size' => $size
        ]);

        return redirect()->route('uploaded_files.index');


    }
}
