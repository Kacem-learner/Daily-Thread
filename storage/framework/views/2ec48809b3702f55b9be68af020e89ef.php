<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <style>
        body {
            background: #f4f6f9;
        }

        .products-container {
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 30px 0;
        }

        .products-card {
            width: 100%;
            max-width: 1100px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .products-header {
            background: #ffffff;
            color: #111;
            text-align: center;
            padding: 15px;
            font-size: 22px;
            font-weight: bold;
            border-bottom: 1px solid #e5e7eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #111;
        }

        thead {
            background: #f3f4f6;
            color: #111;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #111;
        }

        tbody tr {
            background: #ffffff;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        tbody tr:hover {
            background: #eef2ff;
        }

        img {
            border-radius: 8px;
        }

        .btn {
            font-size: 13px;
        }
    </style>
</head>

<body>

<?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('admin.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container-fluid page-body-wrapper">

    <div class="content-wrapper">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" style="width:90%; margin:10px auto;">
                <?php echo e(session('message')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="products-container">

            <div class="products-card">

                <div class="products-header">
                    Product Management
                </div>

                <table>

                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                            <td><?php echo e($product->title); ?></td>
                            <td>₱<?php echo e($product->price); ?></td>
                            <td><?php echo e($product->quantity); ?></td>
                            <td><?php echo e($product->description); ?></td>

                            <!-- TYPE COLUMN -->
                            <td>
                                <span style="
                                    padding:5px 10px;
                                    border-radius:6px;
                                    background:#e5e7eb;
                                    font-size:12px;">
                                    <?php echo e($product->type); ?>

                                </span>
                            </td>

                            <td>
                                <img src="productimage/<?php echo e($product->image); ?>"
                                     style="width:80px; height:auto;">
                            </td>

                            <td>
                                <a href="<?php echo e(url('updateview', $product->id)); ?>"
                                   class="btn btn-primary btn-sm">
                                    Update
                                </a>
                            </td>

                            <td>
                                <a href="<?php echo e(url('deleteproduct', $product->id)); ?>"
                                   class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

<?php echo $__env->make('admin.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH C:\Users\hp\Ecommerce\resources\views/admin/showproduct.blade.php ENDPATH**/ ?>