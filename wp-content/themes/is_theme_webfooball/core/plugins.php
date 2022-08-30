<?php
    function tranhieu_plugin_activation() {
        //khai bao plugin can cai dat
        $plugins = array(
            array(
                'name' => 'Redux Framework',
                'slug' =>  'redux-framework',
                'required' => true,
            )
        );

        //thiet lap TGM
        $configs = array(
            'menu' => 'th_plugin_install',
            'has_notices' => true, // thong bao cai dat
            'dismissable' => false, // co muon tat thong bao ko
            'is_automatic' => true // cho phep tu dong kich hoat
        );

        tgmpa($plugins,$configs);
    }
    add_action('tgmpa_register', 'tranhieu_plugin_activation');
?>