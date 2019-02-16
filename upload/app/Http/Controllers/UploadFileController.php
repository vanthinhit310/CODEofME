<?php /** @noinspection PhpUndefinedMethodInspection */

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;


class UploadFileController extends Controller
{
    //
    public function doUploadFile(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(100, 100);
            $image_resize->save(public_path() . '/image/image'.$filename);
            dd('Upload hình ảnh thành công');
        }
    }

    public function uploadMultiFile(Request $request)
    {
        if ($request->hasFile('attachment')) {
            $files = $request->file('attachment');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path() . '/upload', $filename);
                echo '<p style="color: #1d643b">Tải lên thành công</p> ' . '<strong style="color: blue">' . $filename . '</strong>';
                echo '<br/>';
            }
            echo 'Hoàn Tất';
        }
    }

    public function destroy(Request $request)
    {
        if (file_exists(public_path('upload/' . $request->input('keydele')))) {

            unlink(public_path('upload/' . $request->input('keydele')));
            dd('Xóa file hoàn tất');

        } else {

            dd('File does not exists.');

        }

    }

    public function getListFile()
    {
        $filesInFolder = \File::files('upload');
        foreach ($filesInFolder as $path) {
            $arr = [];
            $file = pathinfo($path);
            array_push($arr, $file['filename'] . '.' . $file['extension']);
            echo json_encode($arr);
            echo '<br/>';
        }

    }

}
