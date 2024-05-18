<!-- bootam nav -->


<div>
    <div class="sticky-bottom bootam-nav" > 
        <div  class="bottomItems">

        
        <a class="bottomItem" href="#">
            <div >
                    <div  class="bottomItemsIcon"> <i class="bi bi-house-fill"></i></div>
                    <div class="bottomItemsName">Home</div>
            </div>
        </a>

        <a class="bottomItem" href="#">

        <div >
            
                <div  class="bottomItemsIcon"> <i class="bi bi-house-fill"></i></div>
                <div class="bottomItemsName">Tv</div>
        </div>

        </a>
        

        <a class="bottomItem" href="#">

        <div class="bottomItem">
               
                <div  class="bottomItemsIcon"> <i class="bi bi-house-fill"></i></div>
                <div class="bottomItemsName">App</div>
            </div>

        </a>

            

            <a class="bottomItem" href="#">

            <div class="bottomItem">
             
                <div  class="bottomItemsIcon"> <i class="bi bi-house-fill"></i></div>
                <div class="bottomItemsName">Search</div>
            </div>

            </a>

            
            

        </div>
    </div>
</div>

    <script>
        document.getElementById('searchIcon').addEventListener('click', function() {
            const searchBar = document.getElementById('searchBar');
            const searchIcon = document.getElementById('searchIcon');
            searchBar.style.display = 'flex';
            searchIcon.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            const searchBar = document.getElementById('searchBar');
            const searchIcon = document.getElementById('searchIcon');
            const isClickInsideSearchBar = searchBar.contains(event.target);
            const isClickInsideSearchIcon = searchIcon.contains(event.target);

            if (!isClickInsideSearchBar && !isClickInsideSearchIcon) {
                searchBar.style.display = 'none';
                searchIcon.style.display = 'block';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>