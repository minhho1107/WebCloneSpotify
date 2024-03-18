<?php if (empty($_GET['page'])) { ?>
<div class="navigation">    
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><i class="logoAdmin fa fa-brands fa-spotify fa-2xl" style="color: #1ed760;"></i></span>
                        <span class="title">
                            <h2>Spotify</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo PAGEROOT ?>/AdminDashBoardController/index">
                        <span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo PAGEROOT ?>/SongAdmin/index" id="input-product">
                        <span class="icon"><i class="fa fa-music" aria-hidden="true"></i></span>
                        <span class="title">Song</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo PAGEROOT ?>/AlbumAdmin/index" >
                        <span class="icon"><i class="fa fa-headphones" aria-hidden="true"></i></span>
                        <span class="title">Album</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo PAGEROOT ?>/PodcastAdmin/index">
                        <span class="icon"><i class="fa fa-podcast" aria-hidden="true"></i></span>
                        <span class="title">Podcast</span>
                    </a>
                </li>
                   <li>
                    <a href="<?php echo PAGEROOT ?>/ArtistAdmin/index">
                        <span class="icon"><i class="fa fa-podcast" aria-hidden="true"></i></span>
                        <span class="title">Artist</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo PAGEROOT ?>/UserAdmin/index">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">User</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo PAGEROOT ?>/PlaylistAdmin/index">
                        <span class="icon"><i class="fa fa-list" aria-hidden="true"></i></span>
                        <span class="title">Playlist</span>
                    </a>
                </li>
                     <li>
                    <a href="<?php echo PAGEROOT ?>/AdminController/index">
                        <span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                        <span class="title">Statistic</span>
                    </a>
                </li>
                <li>
                    <a href="/Spotify/user/logout">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                
            </ul>
        </div>

        <!-- <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        new Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                { year: '2008', value: 20 },
                { year: '2009', value: 10 },
                { year: '2010', value: 5 },
                { year: '2011', value: 5 },
                { year: '2012', value: 20 }
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'year',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['value'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            hideHover: 'auto',
            stacked: true,
            parseTime: false,
            lineColors: ['Skyblue', 'Pink']
        });

        Morris.Donut({
            element: 'mysecondchart',
            data: [
                {label: "Download Sales", value: 12},
                {label: "In-Store Sales", value: 30},
                {label: "Mail-Order Sales", value: 20}
            ]
        });
    </script> -->
        <?php } ?>