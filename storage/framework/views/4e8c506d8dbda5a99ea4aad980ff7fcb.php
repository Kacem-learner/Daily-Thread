<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <style>
        body {
            background: #f4f6f9;
        }

        .orders-container {
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 30px 0;
        }

        .orders-card {
            width: 100%;
            max-width: 1100px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .orders-header {
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
            padding: 12px;
            text-align: center;
            font-size: 14px;
            color: #111;
        }

        tbody tr {
            background: #ffffff;
            transition: 0.2s;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        tbody tr:hover {
            background: #eef2ff;
        }

        .btn-delivered {
            background: #22c55e;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-delivered:hover {
            background: #16a34a;
        }

        .page-title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #111;
        }
    </style>
</head>

<body>

<?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('admin.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container-fluid page-body-wrapper">

        <div class="content-wrapper">

       

            <div class="orders-container">

                <div class="orders-card">

                    <div class="orders-header">
                        Order Management
                    </div>

                    <table>

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Product Title</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($orders->name); ?></td>
                                <td><?php echo e($orders->phone); ?></td>
                                <td><?php echo e($orders->address); ?></td>
                                <td><?php echo e($orders->product_title); ?></td>
                                <td>₱<?php echo e($orders->price); ?></td>
                                <td><?php echo e($orders->quantity); ?></td>
                                <td>₱<?php echo e($orders->total_price); ?></td>
                                <td><?php echo e($orders->status); ?></td>
                                <td>
                                    <a href="<?php echo e(url('/updatestatus', $orders->id)); ?>"
                                       class="btn-delivered">
                                        Delivered
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
</div>

<?php echo $__env->make('admin.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH C:\Users\hp\Ecommerce\resources\views/admin/showorder.blade.php ENDPATH**/ ?>