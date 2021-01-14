</div><!-- /.starter-template -->
</main><!-- /.container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script>
    $(document).ready(function () {
        //Checkbox toggle all
        $('.toggle-checkbox').click( function () {
            let target = $(this).data('toggle-checkbox');
            $('input[class*="'+target+'"]').prop('checked', this.checked);
        });
    });
</script>
</body>
</html>