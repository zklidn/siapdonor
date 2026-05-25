</div> <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.body.classList.toggle('ubah-tema');
        });

        document.getElementById('profileDropdownToggle').addEventListener('click', function(e) {
            e.stopPropagation(); 
            document.getElementById('profileDropdown').classList.toggle('show');
        });

        window.addEventListener('click', function() {
            var dropdown = document.getElementById('profileDropdown');
            if(dropdown && dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            }
        });
    </script>
</body>
</html>