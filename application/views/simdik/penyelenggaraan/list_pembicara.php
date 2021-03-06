<script>
    $(document).ready(function() {
        $('#list').dataTable();
        $('select').attr('class','input-mini');
    } );
</script>
<div class="row">
    <div class="span12"><?php echo $this->session->flashdata('msg'); ?></div>
</div>
<table id="list" width="100%" class="table">
    <thead>
        <tr>
            <th width="5%">No</th>
            <th width="35%">Nama</th>
            <th width="35%">NIP</th>
            <th width="25%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($list); $i++) { ?>
            <tr>
                <td><?php echo ($i + 1) ?></td>
                <td><a href="penyelenggaraan/dosen_tamu/detail_dosen/<?php echo $list[$i]['id'] ?>"><?php echo $list[$i]['nama'] ?></a></td>
                <td><?php echo $list[$i]['nip'] ?></td>
                <td>
                    <a href="penyelenggaraan/dosen_tamu/edit_dosen/<?php echo $list[$i]['id'] ?>">Edit</a>
                    |
                    <a onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" href="penyelenggaraan/dosen_tamu/delete_dosen/<?php echo $list[$i]['id'] ?>">Delete</a>
                </td>
            <?php } ?>
    </tbody>
</table>
<div class="form-actions">
    <a href="penyelenggaraan/dosen_tamu/add_dosen" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> Tambah Dosen Tamu</a>
</div>
