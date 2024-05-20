<!-- bootam nav -->

    <div class="" > 
        <div  class="bottomItems">

        
        <a class="bottomItem" href="#">
            <div >
                    <div  class="bottomItemsIcon"> <i class="bi bi-house-fill"></i></div>
                    <div class="bottomItemsName">Home</div>
            </div>
        </a>

        <a class="bottomItem" href="#">

        <div >
            
                <div  class="bottomItemsIcon"> <i class="bi bi-tv"></i></div>
                <div class="bottomItemsName">Tv</div>
        </div>

        </a>
        

        <a class="bottomItem" href="#">

        <div class="bottomItem">
               
                <div  class="bottomItemsIcon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-android" viewBox="0 0 16 16">
  <path d="M2.76 3.061a.5.5 0 0 1 .679.2l1.283 2.352A8.9 8.9 0 0 1 8 5a8.9 8.9 0 0 1 3.278.613l1.283-2.352a.5.5 0 1 1 .878.478l-1.252 2.295C14.475 7.266 16 9.477 16 12H0c0-2.523 1.525-4.734 3.813-5.966L2.56 3.74a.5.5 0 0 1 .2-.678ZM5 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg></div>
                <div class="bottomItemsName">App</div>
            </div>

        </a>
 
            <a class="bottomItem" href="#">

            <div class="bottomItem">
             
                <div  class="bottomItemsIcon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg></div>
                <div class="bottomItemsName">Search</div>
            </div>

            </a>

             
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