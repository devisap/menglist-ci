<script>
    var hostUrl = "<?= base_url() ?>assets/";
</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url() ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--end::Javascript-->

<!-- datatable custom -->
<script>
    table = $("#datatableUser").DataTable({
        responsive: true,
        scrollX: true
    });

    $('#InputSearchUser').keyup(function() {
        table.search($(this).val()).draw();
    })
</script>
<script>
    table = $("#datatableTransaction").DataTable({
        responsive: true,
        scrollX: true
    });
    $('#InputSearchTransaction').keyup(function() {
        table.search($(this).val()).draw();
    })
</script>
</body>
<!--end::Body-->

</html>