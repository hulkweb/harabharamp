<?php

namespace App\Http\Controllers;

use Treinetic\ImageArtist\lib\Image;
use Treinetic\ImageArtist\lib\Text\TextBox;
use Treinetic\ImageArtist\lib\Text\Color;
use Treinetic\ImageArtist\lib\Text\Font;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary as FacadesCloudinary;

class CertificateController extends Controller
{
    public function index()
    {

        $certificates = Certificate::all();

        if (auth()->user()->admin) {
            $certificates = Certificate::all();
        }
        $data = [

            'certificates' => $certificates
        ];

        return view('admin.certificates', $data);
    }

    public function add()

    {
        $this->create_certificate(auth()->user(), "mkl", "certificate.png");
        $data = [];
        return view('admin.certificate_add', $data);
    }

    public function edit()
    {
        $data = [];
        return view('admin.certificate_add', $data);
    }

    public function store()
    {
        $data = [];

        $requests = request()->all();
        $id = DB::table('certificates')->insertGetId($requests);
        return redirect()->back()->with('succcess', 'Created Successfully  ');
    }


    public function update()
    {
        $data = [];
        $requests = request()->all();
        unset($requests["_token"]);
        Certificate::whereId(request()->id)->update($requests);

        return redirect()->back()->with('succcess', 'Updated Successfully  ');
    }

    public function create_certificate($user, $place, $certificate_image)
    {

        $dir = public_path() . "/uploads/" . $certificate_image;
        $img = new Image("$dir");
        $name = ucfirst($user->name);
        $place = $user->place;
        $image = $user->image;

        $textBox = new TextBox(610, 280);
        $textBox->setColor(Color::getColor(Color::$BLACK));
        $textBox->setFont(Font::getFont(Font::$KHAND_BOLD));
        $textBox->setSize(40);
        $textBox->setMargin(2);
        $textBox->setText(ucfirst($user->name));
        $img->setTextBox($textBox, 120, $img->getHeight() / 2 + 10);

        $img->save(public_path() . "/uploads/certificates/people_certificate_$user->id.jpg", IMAGETYPE_JPEG);
        // return "https://mpbjym.chhavinirman.in/uploads/certificates/people_certificate_$user->id.jpg";

        $uploadedFileUrl = FacadesCloudinary::upload(public_path() . "/uploads/certificates/people_certificate_$user->id.jpg", ['folder' => 'uploads'])->getSecurePath();
        return $uploadedFileUrl;
    }
}
