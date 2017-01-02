<style type="text/css">
    <?= $this->_previewId ?> * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    <?= $this->_previewId ?> table.red-table tbody tr:nth-child(2n) {
        background-color: #f6f6f6;
    }

    <?= $this->_previewId ?> table.footer {
        padding: 20px 15px;
    }

    <?= $this->_preview ? $this->_previewId : 'body'  ?>{
        margin: 0px;
        font-size: 13px;
    }

    <?= $this->_previewId ?> table[class=gray] {
        background-color: #f9f9f9;
        border-bottom: 1px solid #eaeaea;
        color: #2b2b2b
    }

    <?= $this->_previewId ?> td,
    <?= $this->_previewId ?> table {
        max-width: 100%;
    }

    <?= $this->_previewId ?> * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    <?= $this->_previewId ?> img {border: none;}
    </style>
    <style <?php $this->showOnlyOnPreview('ma-media-style="{\'gte\': 604}" '); ?>type="text/css">
    <?php $this->hideOnPreview("@media only screen and (min-width: 604px) {"); ?>
        <?= $this->_previewId ?> .appear {
            display: none;
        }
    <?php $this->hideOnPreview('}'); ?>
    </style>
    <style <?php $this->showOnlyOnPreview('ma-media-style="{\'lte\' : 604}"') ?> type="text/css">
    <?php $this->hideOnPreview("@media only screen and (max-width: 604px) {"); ?>
        <?= $this->_previewId ?> .full-table {
            padding: 0px 15px;
        }
        <?= $this->_previewId ?> .erase {display: none;}
        <?= $this->_previewId ?> table[class=full] {
            width: 100% !important;
            clear: both;
        }
        <?= $this->_previewId ?> .erase {
            display: none;
        }
        <?= $this->_previewId ?> td.full {
            width: 100% !important;
            display: block;
            padding-right: 0px !important;
            clear: both;
        }
        <?= $this->_previewId ?> .mb25 {
            margin-bottom: 25px;
        }
        <?= $this->_previewId ?> .liquid {
            display: block !important;
        }
        <?= $this->_previewId ?> .liquid-center {
            text-align: center !important;
        }
        <?= $this->_previewId ?> .liquid-auto {
            width: auto !important;
        }
    <?php $this->hideOnPreview('}'); ?>
    </style>
    <style <?php $this->showOnlyOnPreview('ma-media-style="{\'lte\':480}"'); ?> type="text/css">
    <?php $this->hideOnPreview("@media only screen and (max-width: 480px) {"); ?>
        <?= $this->_previewId ?> .footer a {
            float: none !important;
            display: block;
            margin-top: 5px;
        }
        <?= $this->_previewId ?> .footer p {
            text-align: center;
        }
    <?php $this->hideOnPreview('}'); ?>
    </style>