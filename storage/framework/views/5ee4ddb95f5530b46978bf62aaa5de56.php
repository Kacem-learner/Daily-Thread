<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0f172a;
            color: white;
        }

        .main-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 80px;
        }

        .title {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            font-size: 14px;
            margin-bottom: 6px;
            color: #cbd5f5;
        }

        .input-group input,
        .input-group select {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #334155;
            background: #1e293b;
            color: white;
            outline: none;
        }

        .full-width {
            grid-column: span 2;
        }

        .submit-btn {
            margin-top: 30px;
            padding: 14px;
            width: 200px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body>

<?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('admin.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container-fluid page-body-wrapper">

    <div class="main-container">

        <h1 class="title">Add Product</h1>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <form action="<?php echo e(url('uploadproduct')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-grid">

                <div class="input-group">
                    <label>Product Name</label>
                    <input type="text" name="title" required>
                </div>

                <div class="input-group">
                    <label>Price</label>
                    <input type="number" name="price" required>
                </div>

                <div class="input-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" required>
                </div>

                <div class="input-group">
                    <label>Description</label>
                    <input type="text" name="description" required>
                </div>

                <div class="input-group full-width">
                    <label>Product Image</label>
                    <input type="file" name="file" required>
                </div>

                <div class="input-group">
                    <label>Product Type</label>
                    <select name="type" required>
                        <option value="regular">Regular</option>
                        <option value="sale">Sale</option>
                        <option value="new">New</option>
                    </select>
                </div>

            </div>

            <button type="submit" class="submit-btn">
                Add Product
            </button>

        </form>

    </div>
</div>

<?php echo $__env->make('admin.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH C:\Users\hp\Ecommerce\resources\views/admin/product.blade.php ENDPATH**/ ?>