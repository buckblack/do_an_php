<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_tai_nghe
{
    public function Hien_thi_tai_nghe()
    {
        //Models
        include_once("models/m_tai_nghe.php");
        $m_tai_nghe=new M_tai_nghe();
        $danh_sach_san_pham=$m_tai_nghe->Doc_tat_ca_tai_nghe();
		
		$p=new pager();
		$limit=8;
		$count=count($danh_sach_san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_tai_nghe->Doc_tat_ca_tai_nghe($vt,$limit);

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Tai nghe";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_tai_nghe_RAZER()
    {
        //Models
        include_once("models/m_tai_nghe.php");
        $m_tai_nghe=new M_tai_nghe();
        $danh_sach_san_pham=$m_tai_nghe->Doc_tat_ca_tai_nghe_RAZER();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Tai nghe RAZER";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_tai_nghe_HYPERX()
    {
        //Models
        include_once("models/m_tai_nghe.php");
        $m_tai_nghe=new M_tai_nghe();
        $danh_sach_san_pham=$m_tai_nghe->Doc_tat_ca_tai_nghe_HYPERX();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Tai nghe HYPERX";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_tai_nghe_STEELSERIES()
    {
        //Models
        include_once("models/m_tai_nghe.php");
        $m_tai_nghe=new M_tai_nghe();
        $danh_sach_san_pham=$m_tai_nghe->Doc_tat_ca_tai_nghe_STEELSERIES();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Tai nghe STEELSERIES";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_tai_nghe_CORSAIR()
    {
        //Models
        include_once("models/m_tai_nghe.php");
        $m_tai_nghe=new M_tai_nghe();
        $danh_sach_san_pham=$m_tai_nghe->Doc_tat_ca_tai_nghe_CORSAIR();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Tai nghe CORSAIR";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_tai_nghe_LOGITECH()
    {
        //Models
        include_once("models/m_tai_nghe.php");
        $m_tai_nghe=new M_tai_nghe();
        $danh_sach_san_pham=$m_tai_nghe->Doc_tat_ca_tai_nghe_LOGITECH();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Tai nghe LOGITECH";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }
}
?>