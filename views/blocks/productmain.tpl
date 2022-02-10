[{$smarty.block.parent}]
[{if $oViewConf->isModuleActive('oe_mmtest')}]
    <h1 id="productTitle" itemprop="name">
        [{$oDetailsProduct->oxarticles__oxtitle->value}] [{$oDetailsProduct->oxarticles__oxvarselect->value}] (teeest)
    </h1>
[{/if}]