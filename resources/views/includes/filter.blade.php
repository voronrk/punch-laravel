<div class="column is-2 filter">
    <form class="form" id="filter">

        @include('filters.products', ['value' => $products, 'title'=> 'Виды продукции', 'id' => 'products'])
        @include('filters.products', ['value' => $materials, 'title'=> 'Виды материалов', 'id' => 'materials'])
        @include('filters.products', ['value' => $machines, 'title'=> 'Оборудование', 'id' => 'machines'])
        
        {{-- <div class="field" id="products">
            <label class="label">Виды продукции</label>
            <div class="field-wrapper-small">
            <?php
                $products = db_query("SELECT * FROM `products`; ");
                while($product = $products->fetch()) {?>
                    <label class="checkbox"><input type="checkbox" id="<?php echo $product['value']?>"><?php echo $product['value']?></label>
                <?php }; ?>
            </div>
            <div class="field-view-more is-size-7 has-text-info">Показать еще</div>
        </div>
        
        <div class="field" id="materials">
            <label class="label">Виды материалов</label>
            <div class="field-wrapper-small">
            <?php
                $materials = db_query("SELECT * FROM `materials`; ");
                while($material = $materials->fetch()) {?>
                    <label class="checkbox"><input type="checkbox" id="<?php echo $material['value']?>"><?php echo $material['value']?></label>
                <?php }; ?>
            </div>
            <div class="field-view-more is-size-7 has-text-info">Показать еще</div>
        </div>

        <div class="field" id="machines">
            <label class="label">Оборудование</label>
            <div class="field-wrapper">
            <?php
                $machines = db_query("SELECT * FROM `machines`; ");
                while($machine = $machines->fetch()) {?>
                    <label class="checkbox"><input type="checkbox" id="<?php echo $machine['value']?>"><?php echo $machine['value']?></label>
            <?php }; ?>
            </div>
        </div>

        <div class="field" id="size-width">
            <label class="label">Размеры изделия</label>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label has-text-weight-normal">Длина</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <p class="control">
                        <input class="input is-small" type="number" id="sizeLength">
                    </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label has-text-weight-normal">Ширина</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <p class="control">
                        <input class="input is-small" type="number" id="sizeWidth">
                    </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label has-text-weight-normal">Высота</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <p class="control">
                        <input class="input is-small" type="number" id="sizeHeight">
                    </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="field" id="size-knife">
            <label class="label">Размеры по ножам</label>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label has-text-weight-normal">Длина</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <p class="control">
                        <input class="input  is-small" type="number" id="knifeSizeLength">
                    </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label has-text-weight-normal">Высота</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <p class="control">
                        <input class="input  is-small" type="number" id="knifeSizeWidth">
                    </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="field" id="year">
            <label class="label">Год</label>
            <div class="field-wrapper-small">
            <?php for ($i=date('Y'); $i>2012; $i--) {?>
                <label class="checkbox"><input type="checkbox" id="<?php echo $i?>"><?php echo $i?></label>
                <?php }; ?>

            </div>
            <div class="field-view-more is-size-7 has-text-info">Показать еще</div>
        </div>

        <div class="field" >
            <label class="label">Номер заказа</label>
            <input type="text" class="input is-small" id="orderNum">
        </div> --}}

    </form>
</div>