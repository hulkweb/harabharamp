<?php
include 'autoload.php';
function create_post($selfie, $name, $cetificate_id)
{


    $filecount = 1;
    $dir = "./certificates/$cetificate_id.pdf";





    // if (!file_exists($dir)) {
    $stylesheet = file_get_contents('style.css');
    $data = '   <div style=" height: 1414px;
        width: 2000px;
        padding: 0;
        margin: 0;
        background-color: aqua;padding:0px;
        display: flex;flex-direction: row;justify-content: flex-end; align-items: center !important;
        background-image: url(\'certificate-demo.png\');
        background-size: cover;background-repeat: no-repeat;">
        <div style="height:150px"></div>
        <div style="text-align:right;padding-right:10px;"> 
          
            <span style="text-transform: capitalize;font-size:30px;font-family:cursive;padding-bottom:10px"> ' . $name . ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <img src="certificates/selfies/' . $selfie . '" style="width:150px;height: 150px; object-fit: cover;">
        </div>
        </div>';
    // }


    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'default_font' => 'serif',  'format' => [200, 141], 'margin_left' => 0, 'margin_right' => 0, 'margin_top' => 0, 'margin_bottom' => 0, 'margin_header' => 0, 'margin_footer' => 0]);

    $mpdf->autoScriptToLang = true;
    $mpdf->autoLangToFont = true;


    $mpdf->SetDisplayMode('fullwidth');

    $mpdf->WriteHTML($data);

    //call watermark content aand image

    $pdf_name = $cetificate_id . ".pdf";
    $mpdf->Output("certificates/pdfs/$pdf_name");
    $mpdf->Output();


    $file_name = "certificates/pdfs/$pdf_name";
    $final_post =  $cetificate_id . ".png";

      $imagick = new Imagick();
      $imagick->setResolution(150, 150);
      $imagick->readImage($file_name);
      $imagick->writeImages("certificates/$final_post",true);


    // return "<a href='http://chhavinirman.com/admin/media/complete_post/$folder_name/$pdf_name' target='_blank' rel='noopener noreferrer'>Post link</a>";
}
