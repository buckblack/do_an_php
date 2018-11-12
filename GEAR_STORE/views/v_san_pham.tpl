<!-- breadcrumbs -->

{include file="thanh_trang_thai.tpl"} 
<!-- //breadcrumbs --> 
<!--- beverages --->

<div class="products">
<div class="container" style="margin-top:-50px">
  <div class="col-md-12 products-right"> 

    {if ($danh_sach_san_pham|@count)>0}
      {foreach $danh_sach_san_pham as $san_pham}
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left" style="padding-bottom:30px">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb"><a href="san-pham={$san_pham->ma_san_pham}-{thu_vien::bo_dau($san_pham->ten_san_pham)}"><img title=" " width="200px" height="150px" alt=" " src="public/images/{$san_pham->thu_muc}/{$san_pham->hinh}"></a>
                      <div style="height:80px">
                        <p>{$san_pham->ten_san_pham}</p>
                      </div>
                      <h4>{number_format($san_pham->don_gia)} VNĐ</h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" id="don_gia({$san_pham->don_gia})">
                          <input type="hidden" name="currency_code" value="VND">
                          <input type="button" id="{$san_pham->ma_san_pham}" don_gia="{$san_pham->don_gia}" value="thêm vào giỏ" class="button" >
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/foreach}
      <div class="clearfix"> </div>
      <nav class="numbering"> {if isset($thanh_phan_trang)}{$thanh_phan_trang}{/if} </nav>
      {else}
      <p align="center" style="color:#F00; font-size:24px; font-weight:bold">Không tìm thấy sản phẩm nào với từ khoá: {$smarty.session.tim_kiem}</p>
      {/if}
    </div>


    <div class="clearfix"> </div>
  </div>
</div>
<!--- beverages --->