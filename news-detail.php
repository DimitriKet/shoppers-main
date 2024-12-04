<?php
if (isset($_GET['id']))
{
    $id = $_GET['id'];
} 
?>
<section id="news" class="site-section news-detail">
    <div class="container">
        <div class="row">
            <div class="left col-12 col-lg-9">
                <?php 
                    $sql = "select * from `news` where {$id} = news.id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <div class="title"><?php echo $row['name'] ?></div>
                <div class="subtitle"><?php echo $row['date'] ?></div>
                <div class="content"><?php echo $row['content'] ?></div>
            </div>
            <div class="right col-12 col-lg-3">
                <?php 
                    $sql = "select * from `news` where {$id} != news.id limit 3";
                    $result = mysqli_query($conn, $sql);
                    $data = '';
                ?>
                <div class="title">Có thể bạn sẽ thích</div>
                <div class="items-news">
                    <?php while($row = mysqli_fetch_assoc($result)) 
                    {
                        $data .= '
                        <a class="item" href="index.php?cmd=news-detail&id='.$row['id'].'">
                            <div class="image">
                                <img src="images/'. $row['img'].'" alt="">
                            </div>
                            <div class="content">
                                '. $row['name'].'
                            </div>
                        </a>';
                    }
                    echo $data;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>