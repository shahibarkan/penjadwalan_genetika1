<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            font-size: 8px;
            width: 100%;
        }

        tr {
            page-break-inside: avoid;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 1px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 1px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 1px;
        }

        .page-break {
            page-break-after: always;
        }

    </style>
</head>
<body>
    <h4 class="text-center mb-3" style="text-align: center;">Jadwal Pelajaran</h4>
  
    <table class="table table-bordered table-striped">
    <thead>
        <tr class="info">
            <th style="text-align:center;">
                No.
            </th>
            <th style="text-align:center;">
                Hari
            </th>
            <th style="text-align:center;">
                Jam
            </th>
            <th style="text-align:center;">
                Nama Ruangan
            </th>
            <th style="text-align:center;">
                Kapasitas Ruangan
            </th>
            <th style="text-align:center;">
                Mata Pelajaran
            </th>
            <th style="text-align:center;">
                Guru Pengampu
            </th>
            <th style="text-align:center;">
                Semester
            </th>
            <th style="text-align:center;">
                SKS
            </th>
            <th style="text-align:center;">
                Kelas
            </th>
            <th style="text-align:center;">
                Nilai
            </th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $schedule): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td align="center">
                <?php echo e($key + 1); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->day->name_day) ? $schedule->day->name_day : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->time->range) ? $schedule->time->range : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->room->name) ? $schedule->room->name : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->room->capacity) ? $schedule->room->capacity : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->course->name) ? $schedule->teach->course->name : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->lecturer->name) ? $schedule->teach->lecturer->name : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->course->semester) ? $schedule->teach->course->semester : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->course->sks) ? $schedule->teach->course->sks : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->class_room) ? $schedule->teach->class_room : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->value) ? $schedule->value : ''); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
  
</body>
</html>
