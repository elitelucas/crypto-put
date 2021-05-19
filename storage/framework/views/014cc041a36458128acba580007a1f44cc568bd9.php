<?php $__env->startSection('page-head'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">卖方账号</label>
            <div class="layui-input-inline">
                <input type="text" name="sell_account" lay-verify="required" autocomplete="off" placeholder="" class="layui-input" value="<?php if(!empty($result->sell_account)): ?><?php echo e($result->sell_account); ?><?php endif; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">买方账号</label>
            <div class="layui-input-inline">
                <input type="text" name="buy_account" lay-verify="required" autocomplete="off" placeholder="" class="layui-input" value="<?php if(!empty($result->buy_account)): ?><?php echo e($result->buy_account); ?><?php endif; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">交易币</label>
            <div class="layui-input-inline">
                <select name="currency_id" lay-filter="" lay-search>
                    <option value=""></option>
                    <?php if(!empty($currencies)): ?>
                    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($currency->id); ?>" <?php if($currency->id == $result->currency_id): ?> selected <?php endif; ?>><?php echo e($currency->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">法币</label>
            <div class="layui-input-inline">
                <select name="legal_id" lay-filter="">
                    <option value=""></option>
                    <?php if(!empty($currencies)): ?>
                    <?php $__currentLoopData = $legals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $legal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($legal->id); ?>" <?php if($legal->id == $result->legal_id): ?> selected <?php endif; ?>><?php echo e($legal->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">价格区间下限</label>
            <div class="layui-input-inline">
                <input type="text" name="min_price" lay-verify="required" autocomplete="off" placeholder="" class="layui-input" value="<?php if(!empty($result->min_price)): ?><?php echo e($result->min_price); ?><?php endif; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">价格区间上限</label>
            <div class="layui-input-inline">
                <input type="text" name="max_price" lay-verify="required" autocomplete="off" placeholder="" class="layui-input" value="<?php if(!empty($result->max_price)): ?><?php echo e($result->max_price); ?><?php endif; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">数量随机下限</label>
            <div class="layui-input-inline">
                <input type="text" name="min_number" lay-verify="required" autocomplete="off" placeholder="" class="layui-input" value="<?php if(!empty($result->min_number)): ?><?php echo e($result->min_number); ?><?php endif; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">数量随机上限</label>
            <div class="layui-input-inline">
                <input type="text" name="max_number" lay-verify="required" autocomplete="off" placeholder="" class="layui-input" value="<?php if(!empty($result->max_number)): ?><?php echo e($result->max_number); ?><?php endif; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">下单频率</label>
            <div class="layui-input-inline">
                <input type="text" name="need_second" lay-verify="required" autocomplete="off" placeholder="" class="layui-input" value="<?php if(!empty($result->need_second)): ?><?php echo e($result->need_second); ?><?php endif; ?>">
            </div>
        </div>

        <input type="hidden" name="id" value="<?php if(!empty($result->id)): ?><?php echo e($result->id); ?><?php endif; ?>">
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>


        layui.use(['form','laydate'],function () {
            var form = layui.form
                ,$ = layui.jquery
                ,laydate = layui.laydate
                ,index = parent.layer.getFrameIndex(window.name);
            //监听提交
            form.on('submit(demo1)', function(data){
                var data = data.field;
                $.ajax({
                    url:'<?php echo e(url('admin/auto_add')); ?>'
                    ,type:'post'
                    ,dataType:'json'
                    ,data : data
                    ,success:function(res){
                        if(res.type=='error'){
                            layer.msg(res.message);
                        }else{
                            parent.layer.close(index);
                            parent.window.location.reload();
                        }
                    }
                });
                return false;
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin._layoutNew', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>