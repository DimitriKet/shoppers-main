
<section id="news" class="site-section news-category">
    <div class="container">
        <div class="row">
            <div class="left col-12 col-md-3">
                <div class="title">Danh mục tin tức</div>
            </div>
            <div class="right col-12 col-md-9 row">
            <?php
                $data = '';
                $sql='select * from news';
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                    if($row['status']==1) 
                    {
                        $data.='
                    <div class="col-12 col-lg-4">
                        <a class="item" href="index.php?cmd=news-detail&id='.$row['id'].'">
                            <div class="image">
                                <img src="images/'.$row['img'].'" alt=""/>
                            </div>
                            <div class="content">
                                <div class="content__title">
                                    '.$row['name'].'
                                </div>
                                <div class="content__subtitle">
                                    <span>'.$row['date'].'</span>
                                </div>
                                <div class="content__description">
                                    '.$row['description'].'
                                </div>
                            </div>
                        </a>
                    </div>';
                    }
                }
                echo $data;
            ?>
            </div>
        </div>
    </div>
</section>