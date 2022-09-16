<?php
function SelectParent1($data, $selected = 0, $parent = 0, $text = '')
  {
      //cái này đại chúng cho mn xài
      foreach ($data as $key => $val) {
          if ($val->parent_category == $parent) {
              if ($val->id_category == $selected) {
                  $a = '<option value="'.$val->id_category.'" selected>'.$val->name_category.'</option>';
              } else {
                  $a = '<option value="'.$val->id_category.'">'.$text.''.$val->name_category.'</option>';
              }
  
              echo $a;
              unset($data[$key]);
              SelectParent1($data, $selected, $val->id_category, $text . '--|');
          }
      }
  }
function SelectParent2($data,$parent,$selected=0,$text="") //cái này hàng dành cho category/edit
 {
    foreach($data as $key=>$val){
       
        if($parent == $val->parent_category ){
            if($val->id_category==$selected){
            $a= '
            <option value='.$val->id_category.' selected>'.$text.''.$val->name_category.'</option>
            ';
            }else{
                $a= '
            <option value='.$val->id_category.'>'.$text.''.$val->name_category.'</option>
            ';  
            }

            echo $a;
            unset($data[$key]);
            SelectParent2($data,$val->id_category,$selected,$text.'--|');
        };
    
    };
 }
 function printparent($data,$parent=0,$text="") // in ra bên index
 {
    foreach($data as $key=>$val){
        if($val->parent_category == $parent){
            $a= '
            <tr>
                <td>'.$val->id_category.'</td>
                <td>'.$text.''.$val->name_category.'</td>
                <td><a onclick="return deletehay() " href="'.route('admin.category.delete',['id'=>$val->id_category]).'"><span class="badge bg-danger">Delete</span></a></td>
                <td><a href="'.route('admin.category.edit',['id'=>$val->id_category]).'"><span class="badge bg-primary">Edit</span></a></td>
            </tr>
            ';
            echo $a;
            unset($data[$key]);
            printparent($data,$val->id_category,$text.'--|');
        };
    };
    
 }
 
?>