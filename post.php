<?php
  include_once("templates/header.php");

  if (isset($_GET['id'])){
    
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
      if($post['id'] == $postId){
        $currentPost = $post;
      }
    }
  }
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
      <p id="post-description"><?php echo $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?php echo $BASE_URL; ?>img/<?php echo $currentPost['img'] ?>" alt="<?php echo $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laboriosam itaque eum, distinctio dolore repellat voluptatibus culpa quidem molestiae natus veniam sint earum repudiandae. Accusantium nobis culpa quaerat! Beatae, quos!
      Quod iure est aliquam ut, quos vitae earum doloremque tenetur ex. Possimus quo amet, voluptatum inventore quas vero veniam atque minima asperiores suscipit cum blanditiis dolorem magni tempora harum molestias.
      Ad facilis reiciendis non rerum facere nisi, quaerat, repellat animi veritatis maxime eligendi accusantium perspiciatis at ipsum! Dignissimos cum obcaecati, nam molestiae, consectetur ullam natus vero deleniti officiis soluta voluptate.
      Optio vel atque dicta perferendis beatae asperiores molestias, sint minus sapiente veniam tenetur. Ipsa qui id voluptatum, quam et nulla aperiam, consequatur aliquam maxime unde, saepe distinctio laboriosam quibusdam? Alias.
      Eos aliquam fugiat possimus praesentium, nemo excepturi eius nam dolore ipsam ea sint cumque! Doloremque assumenda mollitia at, veritatis nisi laudantium enim, omnis optio, odio aliquid harum quisquam voluptate dolore?</p>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laboriosam itaque eum, distinctio dolore repellat voluptatibus culpa quidem molestiae natus veniam sint earum repudiandae. Accusantium nobis culpa quaerat! Beatae, quos!
      Quod iure est aliquam ut, quos vitae earum doloremque tenetur ex. Possimus quo amet, voluptatum inventore quas vero veniam atque minima asperiores suscipit cum blanditiis dolorem magni tempora harum molestias.
      Ad facilis reiciendis non rerum facere nisi, quaerat, repellat animi veritatis maxime eligendi accusantium perspiciatis at ipsum! Dignissimos cum obcaecati, nam molestiae, consectetur ullam natus vero deleniti officiis soluta voluptate.
      Optio vel atque dicta perferendis beatae asperiores molestias, sint minus sapiente veniam tenetur. Ipsa qui id voluptatum, quam et nulla aperiam, consequatur aliquam maxime unde, saepe distinctio laboriosam quibusdam? Alias.
      Eos aliquam fugiat possimus praesentium, nemo excepturi eius nam dolore ipsam ea sint cumque! Doloremque assumenda mollitia at, veritatis nisi laudantium enim, omnis optio, odio aliquid harum quisquam voluptate dolore?</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?php echo $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
            <li><a href="#"><?php echo $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>
<?php
  include_once("templates/footer.php");
?>