<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");

class C_ban_phim
{
    public function Hien_thi_ban_phim()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $san_pham=$m_ban_phim->Doc_tat_ca_ban_phim();
		
		$p=new pager();
		$limit=8;
		$count=count($san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim($vt,$limit);


        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_RAZER()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_RAZER();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím RAZER";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_LEOPOLD()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_LEOPOLD();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím LEOPOLD";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_DUCKY()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_DUCKY();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím DUCKY";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_IKBC()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_IKBC();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím IKBC";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_CORSAIR()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_CORSAIR();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím CORSAIR";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_LOGITECH()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_LOGITECH();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím LOGITECH";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_IROCKS()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_IROCKS();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím IROCKS";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_ban_phim_STEELSERIES()
    {
        //Models
        include_once("models/m_ban_phim.php");
        $m_ban_phim=new M_ban_phim();
        $danh_sach_san_pham=$m_ban_phim->Doc_tat_ca_ban_phim_STEELSERIES();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Bàn phím STEELSERIES";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }
}
?>