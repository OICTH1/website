<?php

class Controller_Item Extends Controller_Page
{
    public function action_list($category = 'pizza')
    {
        $category_table =  array('pizza'=>'ピザ','side'=>'サイド','drink'=>'ドリンク');
        if(!array_key_exists($category,$category_table)){
            return Response::redirect('index.php/welcome/404');
        }
        $items = Model_Item::find('all',array(
            'where' => array(
                array('category',$category_table[$category])
            )
        ));
        $item_list = array();
        foreach ($items as $item) {
            array_push($item_list,array(
                'item_id' => $item->id,
                'img_path' => 'items/'.$item->img['path'],
                'item_name' => $item->name,
                'prices' => array(
                    'unit_price' => $item->unit_price,
                    'unit_price_s' => $item->unit_price_s,
                    'unit_price_m' => $item->unit_price_m,
                    'unit_price_l' => $item->unit_price_l
                ),
                'explanatory' => $item->explanatory
            ));
        }
        $data['item_list'] = $item_list;
        $this->template->content = Asset::img($item_list[0]['img_path']);
    }

    public function action_detail($item_id)
    {
        $item = Model_Item::find($item_id);
        /*if(!empty($item)){
            return Response::redirect('index.php/welcome/404');
        }*/
        $data['detail'] = array(
            'item_id' => $item->id,
            'img_path' => 'items/'.$item->img['path'],
            'item_name' => $item->name,
            'prices' => array(
                'unit_price' => $item->unit_price,
                'unit_price_s' => $item->unit_price_s,
                'unit_price_m' => $item->unit_price_m,
                'unit_price_l' => $item->unit_price_l
            ),
            'explanatory' => $item->explanatory
        );
        $this->template->content = View::forge('content/itemdetail',$data);
    }
}

?>
