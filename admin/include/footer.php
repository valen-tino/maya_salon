            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <br>
                <a href="#">vaze</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Wrapper -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->

            <script src="../admin/assets/libs/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="../admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="../admin/assets/extra-libs/sparkline/sparkline.js"></script>
            <!--Wave Effects -->
            <script src="../admin/dist/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="../admin/dist/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="../admin/dist/js/custom.min.js"></script>
            <script type="text/javascript">
                var timestamp = '<?= time(); ?>';

                function updateTime() {
                    $('#time').html(Date(timestamp));
                    timestamp++;
                }
                $(function() {
                    setInterval(updateTime, 1000);
                });
            </script>
            </body>

            </html>