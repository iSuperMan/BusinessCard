<?php

/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 12.09.15
 * Time: 17:47
 */
class GENPDF
{
    // get just html-string
    public static function make_from_raw($html){
        $mpdf=new mPDF();
        $mpdf->WriteHTML($html);
        $mpdf->Output('renderHtml.pdf','D');
    }

    // get view-file, data, css-styles
    public static function make_invoice($view, $data=null, $css=null){
        $mpdf = Kohana_MPDF::factory($view, $data);
        if( $css !== null)
            $mpdf->setCss($css);
        $mpdf->render();
        $mpdf->output('invoice.pdf', 'D');
    }
}
