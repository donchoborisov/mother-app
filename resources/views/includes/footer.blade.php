<footer>
    <span>&copy; Mother Group 2022</span>
</footer>

<div class="dialog-container filter-dialog">
    <div class="dialog">
        <div class="close"><span>Close</span></div>
        <h4>Filter reports</h4>
        <form>
            <div class="fields">
                <div class="field">
                    <label>Search</label>
                    <input type="text" placeholder="Search reports..."/>
                </div>

                <div class="field">
                    <label>Type</label>
                    <ul class="list list-checkboxes">
                        <li>
                            <label for="type_scheduled"><input type="checkbox" id="type_scheduled" checked/><span></span><em>Scheduled</em></label>
                        </li>
                        <li>
                            <label for="type_completed"><input type="checkbox" id="type_completed"/><span></span><em>Completed</em></label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="buttons">
                <button type="submit" class="button"><img src="{{asset('/v4/media/icons/filter-white.svg')}}" alt=""/><span>Update filters</span></button>
                <div class="cancel-wrapper"><span class="cancel">Cancel and return to reports</span></div>
            </div>
        </form>
    </div>
</div>

<div class="mobile-menu-popup">
    <div class="close"><span>Close</span></div>
    <ul>
        <li>
            <span>Dashboard</span>
            <ul>
                <li><a href="" title="">General</a></li>
                <li><a href="" title="">Orders</a></li>
                <li><a href="" title="">Issues</a></li>
            </ul>
        </li>
        <li>
            <span>Pods</span>
            <ul>
                <li class="active"><a href="" title="">Pods</a></li>
                <li><a href="" title="">Groups</a></li>
                <li><a href="" title="">Digital signage</a></li>
                <li><a href="" title="">Issues</a></li>
            </ul>
        </li>
        <li>
            <span>Orders</span>
            <ul>
                <li><a href="" title="">Analytics</a></li>
                <li><a href="" title="">Order log</a></li>
            </ul>
        </li>
        <li>
            <span>Products</span>
            <ul>
                <li><a href="" title="">Products</a></li>
                <li><a href="" title="">Price lists</a></li>
                <li><a href="" title="">Filters</a></li>
                <li><a href="" title="">Allergens</a></li>
                <li><a href="" title="">Tax codes</a></li>
            </ul>
        </li>
        <li>
            <span>Reports</span>
            <ul>
                <li><a href="" title="">Reports</a></li>
            </ul>
        </li>
        <li>
            <span>Admin</span>
            <ul>
                <li><a href="" title="">Users</a></li>
                <li><a href="" title="">Companies</a></li>
                <li><a href="" title="">Packages</a></li>
                <li><a href="" title="">Hardware</a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="mobile-sub-menu-popup">
    <div class="close"><span>Close</span></div>
    <ul>
        <li>
            <a href="" title="">Pod info</a>
        </li>
        <li>
            <span>Dashboard</span>
            <ul>
                <li><a href="" title="">General</a></li>
                <li><a href="" title="">Orders</a></li>
                <li><a href="" title="">Issues</a></li>
            </ul>
        </li>
        <li>
            <span>Pods</span>
            <ul>
                <li class="active"><a href="" title="">Pods</a></li>
                <li><a href="" title="">Groups</a></li>
                <li><a href="" title="">Digital signage</a></li>
                <li><a href="" title="">Issues</a></li>
            </ul>
        </li>
        <li>
            <span>Orders</span>
            <ul>
                <li><a href="" title="">Analytics</a></li>
                <li><a href="" title="">Order log</a></li>
            </ul>
        </li>
    </ul>
</div>

<script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>