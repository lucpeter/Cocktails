<footer id="footer-placeholder">
    <div id="footer">
        <ul>
            <li><?php 
                date_default_timezone_set("America/Denver");
                echo "Last modified on " . date('m/d/Y h:m', filemtime($currentPage)); 
                ?>
            </li>
            <li>By We Love Hot Dads</li>
        </ul>
    </div>
</footer>