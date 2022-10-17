<?php echo Form::hidden('idroom', isset($rooms->id) ? $rooms->id : '', ['class' => 'form-control', 'id' => 'idroom']); ?>

<div class="form-group">
    <label>
        Kode Ruangan
    </label>
    <?php echo Form::text('code_rooms', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Kode Ruang', 'id' => 'code_rooms']); ?>

</div>
<div class="form-group">
    <label>
        Nama Ruangan
    </label>
    <?php echo Form::text('namerooms', isset($rooms->name) ? $rooms->name : '', ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama Ruangan', 'id' => 'namerooms']); ?>

</div>
<div class="form-group">
    <label>
        Kapasitas
    </label>
    <?php echo Form::text('capacity', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan kapasitas ']); ?>

</div>
<div class="form-group">
    <label>
        Jenis
    </label>
    <?php echo Form::select('type', $type, null, ['class' => 'form-control select2 to-select', 'id' => 'type', 'required','placeholder' => 'Pilih Jenis']); ?>

    <label id="type-error" class="error" for="type" style="display: none;">This field is required.</label>
</div>
<button class="btn btn-primary">
    Simpan
</button>
