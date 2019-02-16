<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->id = round(microtime(true));
        $product->congnghemanhinh = $request->cnmh;
        $product->dophangiai = $request->dpgmh;
        $product->dorongmanhinh = $request->drmh;
        $product->dophangiaicamerasau = $request->dpgs;
        $product->dophangiaicameratruoc = $request->dpgt;
        $product->denflash = $request->flash;
        $product->quayphim = $request->qp;
        $product->hedieuhanh = $request->hdh;
        $product->chipset = $request->cs;
        $product->tocdocpu = $request->cpu;
        $product->gpu = $request->gpu;
        $product->ram = $request->ram;
        $product->bonhotrong = $request->bnt;
        $product->thesd = $request->tsd;
        $product->mangdidong = $request->mdd;
        $product->wifi = $request->wf;
        $product->jack = $request->jkn;
        $product->ketnoikhac = $request->knk;
        $product->tensanpham = $request->tensp;
        $product->hinhanhsanpham = $request->ha;
        $product->hinhanh1 = $request->ha1;
        $product->hinhanh2 = $request->ha2;
        $product->gia = $request->gia;
        $product->kichthuoc = $request->kt;
        $product->dungluongpin = $request->pin;
        $product->thietke = $request->tk;
        $product->thoigianramat = $request->tg;
        $product->tinhnang = $request->tn;
        $product->sale = $request->sale;
        $product->soluongconlai = $request->sl;
        $product->mota = $request->mota;
        $product->save();
        return redirect('/admin/listproduct');
    }

    public function editProduct(Request $request)
    {
        $id = $request->id;
        $cnmh = $request->cnmh;
        $dpgmh = $request->dpgmh;
        $drmh = $request->drmh;
        $dpgs = $request->dpgs;
        $dpgt = $request->dpgt;
        $flash = $request->flash;
        $qp = $request->qp;
        $hdh = $request->hdh;
        $cs = $request->cs;
        $cpu = $request->cpu;
        $gpu = $request->gpu;
        $ram = $request->ram;
        $bnt = $request->bnt;
        $tsd = $request->tsd;
        $mdd = $request->mdd;
        $wf = $request->wf;
        $jkn = $request->jkn;
        $knk = $request->knk;
        $tsp = $request->tensp;
        $ha = $request->ha;
        $ha1 = $request->ha1;
        $ha2 = $request->ha2;
        $gia = $request->gia;
        $kt = $request->kt;
        $pin = $request->pin;
        $tk = $request->tk;
        $tgrm = $request->tg;
        $tn = $request->tn;
        $sale = $request->sale;
        $sl = $request->sl;
        $mota = $request->mota;
        Product::where('id', $id)->update([
            'congnghemanhinh' => $cnmh,
            'dophangiai' => $dpgmh,
            'dorongmanhinh' => $drmh,
            'dophangiaicamerasau' => $dpgs,
            'dophangiaicameratruoc' => $dpgt,
            'denflash' => $flash,
            'quayphim' => $qp,
            'hedieuhanh' => $hdh,
            'chipset' => $cs,
            'tocdocpu' => $cpu,
            'gpu' => $gpu,
            'ram' => $ram,
            'bonhotrong' => $bnt,
            'thesd' => $tsd,
            'mangdidong' => $mdd,
            'wifi' => $wf,
            'jack' => $jkn,
            'ketnoikhac' => $knk,
            'tensanpham' => $tsp,
            'hinhanhsanpham' => $ha,
            'hinhanh1' => $ha1,
            'hinhanh2' => $ha2,
            'gia' => $gia,
            'kichthuoc' => $kt,
            'dungluongpin' => $pin,
            'thietke' => $tk,
            'thoigianramat' => $tgrm,
            'tinhnang' => $tn,
            'sale' => $sale,
            'soluongconlai' => $sl,
            'mota' => $mota
        ]);
        return redirect('/admin/listproduct');
    }

    public function deleteProduct(Request $request)
    {
        $id = $request->id;
        Product::where('id', $id)->delete();
        return redirect('/admin/listproduct');
    }
}
