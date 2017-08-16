{block name="backend/base/header/javascript"}
    {$smarty.block.parent}
    <script type="text/javascript"
            src="{link file='backend/_resources/js/char-restrict.js'}?{Shopware::REVISION}"
            id="ksk-attribute-max-length"
            data-attribute-name="ksk_additional_description"
            data-max-length="100"
    ></script>
{/block}
