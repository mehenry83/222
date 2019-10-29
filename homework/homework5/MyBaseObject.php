<?php
    class MyBaseObject {
        private
            $content;
        function set_content($new_content) {
            $this->content = $new_content;
        }


        function get_content() {
            return $this->content;
        }


        private
            $client;
        function set_client($new_client) {
            $this->client = $new_client;
        }

        function get_client() {
            return $this->client;
        }
        private
            $clearance;
        function set_clearnace($new_clearance) {
            $this->clearance = $new_clearance;
        }

        function get_clearance() {
            return $this->clearance;
        }
    }


    ?>