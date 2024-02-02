 <?php
    class View_Product
    {
        public function __construct()
        {
        }

        public function createForm()
        {
            echo "<pre>";
            $form = '<form action="" method="POST">';
            $form .= '<div>';
            $form .= $this->creteTextField('ccc_product[product_name]', "Product Name: ");
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->creteTextField('ccc_product[sku]', "Sku: ");
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->createRadioButtons('ccc_product[product_type]', "Product Type: ", array(
                'simple' => 'Simple',
                'bundle' => 'Bundle',
            ), '', 'product_type:');
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->createDropdownField('ccc_product[cat_id]', "Category: ", [
                1 => 'Bar & Game Room',
                2 => 'Bedroom',
                3 => 'Decor',
                4 => 'Dining & Kitchen',
                5 => 'Lighting',
                6 => 'Living Room',
                7 => 'Mattresses',
                8 => 'Office',
                9 => 'Outdoor',
            ],1,'');
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->creteTextField('ccc_product[manufacturer_cost]', "Manufacturer Cost: ");
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->creteTextField('ccc_product[shipping_cost]', "Shipping Cost: ");
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->creteTextField('ccc_product[total_cost]', 'Total Cost');
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->creteTextField('ccc_product[price]', 'Price: ');
            $form .= '</div>';
            $form .= '<div>';
            $form .= '<br>';
            $form .= $this->createDropdownField('ccc_product[status]', "Status: ", [
                'enabled' => 'Enabled',
                'disabled' => 'Disabled',
            ],'enable');
            $form .= '</div>';
            $form .= '<br>';
            $form .= $this->creteSubmitBtn('Submit');
            $form .= '</div>';
            $form .= '</form>';
            return $form;
        }

        public function creteTextField($name, $title, $value = '', $id = '')
        {
            return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
        }

        public function createDropdownField($name, $title, $options=array(), $selected = '', $id = '')
        {
            $dropdown = $title;
            $dropdown .= "<select name={$name}>";
            foreach ($options as $key => $value) {
                $selectedAttr = ($key == $selected) ? 'selected="selected"' : '';
                $dropdown .= "<option value={$key} class={$id} {$selectedAttr}>{$value}</option>";
            }
            $dropdown .= '</select>';
            return $dropdown;
        }

        public function createRadioButtons($name, $title, $options = array(), $selected = '', $id = '')
        {
            $radios = '<label>' . $title . '</label>';
            //$title .= '<label>' . $title . '</label>';

            foreach ($options as $value => $label) {
                $checkedAttr = ($value == $selected) ? 'checked="checked"' : '';
                $radios .= '<input type="radio" id="' . $id . '_' . $value . '" name="' . $name . '" value="' . $value . '" ' . $checkedAttr . '>';
                $radios .= '<label for="' . $id . '_' . $value . '">' . $label . '</label>';
            }

            return $radios;
        }

        public function creteSubmitBtn($title)
        {
            return '<input type="submit" name="submit" value="' . $title . '">';
        }

        public function toHtml()
        {
            return $this->createForm();
        }
    }
