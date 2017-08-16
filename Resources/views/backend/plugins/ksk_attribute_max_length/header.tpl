{block name="backend/base/header/javascript"}
    {$smarty.block.parent}
    <script type="text/javascript"
            src="{link file='backend/_resources/js/char-restrict.js'}?{Shopware::REVISION}"
            id="ksk-attribute-max-length"
            data-attribute-name="{$ksk_attribute_max_length['attribute-name']}"
            data-max-length="{$ksk_attribute_max_length['max-length']}"
    ></script>
{/block}
