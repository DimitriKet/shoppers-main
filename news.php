
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
                    <!-- <a class="item" href="#">
                        <div class="image">
                            <img src="images/cloth_2.jpg" alt=""/>
                        </div>
                        <div class="content">
                            <div class="content__title">
                                Top 5 cước cầu lông được ưa chuộng nhất trên thị trường hiện nay
                            </div>
                            <div class="content__subtitle">
                                <span>22-08-2024 14:36</span>
                            </div>
                            <div class="content__description">
                                Trên thị trường cầu lông hiện nay có rất nhiều loại cước cầu lông đến từ các thương hiệu như: Yonex, Lining, Victor, Kumpoo,... Và nhiều anh em lông thủ đang băn khoăn không biết nên chọn loại cước nào cho phù hợp với nhu cầu và túi tiền. Để giải đáp vấn đề đó hôm nay ShopVNB sẽ giới thiệu đến các bạn top 5 cước cầu lông được ưa chuộng nhất trên thị trường hiện nay.
                            </div>
                        </div>
                    </a> -->
            </div>
        </div>
    </div>
</section>