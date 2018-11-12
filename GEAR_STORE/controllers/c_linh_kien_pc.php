<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_linh_kien_pc
{
    public function Hien_thi_linh_kien()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_linh_kien_pc();
		
		$p=new pager();
		$limit=8;
		$count=count($danh_sach_san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_linh_kien_pc($vt,$limit);

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_CPU()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_CPU();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / CPU";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_Mainboard()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_Mainboard();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Mainboard";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_VGA()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_VGA();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / VGA";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_Case()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_Case();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Case";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_PSU()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_PSU();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / PSU";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_RAM()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_RAM();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / RAM";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_SSD()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_SSD();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / SSD";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_HDD()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_HDD();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / HDD";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_Cooling()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_Cooling();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Cooling";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

    public function Hien_thi_linh_kien_PM_ban_quyen()
    {
        //Models
        include_once("models/m_linh_kien_pc.php");
        $m_linh_kien_pc=new M_linh_kien_pc();
        $danh_sach_san_pham=$m_linh_kien_pc->Doc_tat_ca_PM_ban_quyen();

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Linh kiện PC / Phần mềm bản quyền";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }
}
?>