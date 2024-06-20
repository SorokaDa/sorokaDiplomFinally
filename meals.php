<?php
session_start();
$products = mysqli_query($connection, "SELECT * FROM `t_meal`;");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_to_basket'])) {
  $id_product = intval($_POST['id']);
  $query = "SELECT * FROM `t_meal` WHERE `id` = $id_product";
  $myChoiseProduct = mysqli_query($connection, $query);
  mysqli_query($connection, "INSERT INTO `baskets`(`id_user`, `id_product`) VALUES (2, $id_product)");
}
?>

<?php foreach ($products as $product) : ?>
  <div class="catalog__item">
    <div class="catalog__image"><img class="card-img-top" alt='<?= $product['title'] ?>' title='<?= $product['title'] ?>' src='<?= $product['image'] ?>' /></div>
    <div class="catalog__name"><?= $product['title'] ?></div>
    <div class="catalog__descr"><?= $product['description'] ?></div>
    <div class="catalog__footer">
      <div class="catalog__price"><?= $product['price'] ?> BYN</div>
        <input name="id" type="hidden" value="<?= $product['id']; ?>">
        <button type="submit" name="send_to_basket">
          <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.7812 7H19.9297L14.8906 1.10156C14.5391 0.710938 13.9531 0.671875 13.5625 0.984375C13.1719 1.33594 13.1328 1.92188 13.4453 2.3125L17.4688 7H6.49219L10.5156 2.3125C10.8281 1.92188 10.7891 1.33594 10.3984 0.984375C10.0078 0.671875 9.42188 0.710938 9.07031 1.10156L4.03125 7H1.21875C0.945312 7 0.75 7.23438 0.75 7.46875V8.40625C0.75 8.67969 0.945312 8.875 1.21875 8.875H1.92188L3.01562 16.6484C3.13281 17.5859 3.91406 18.25 4.85156 18.25H19.1094C20.0469 18.25 20.8281 17.5859 20.9453 16.6484L22.0391 8.875H22.7812C23.0156 8.875 23.25 8.67969 23.25 8.40625V7.46875C23.25 7.23438 23.0156 7 22.7812 7ZM19.1094 16.375H4.85156L3.83594 8.875H20.125L19.1094 16.375ZM12.9375 11.0625C12.9375 10.5547 12.5078 10.125 12 10.125C11.4531 10.125 11.0625 10.5547 11.0625 11.0625V14.1875C11.0625 14.7344 11.4531 15.125 12 15.125C12.5078 15.125 12.9375 14.7344 12.9375 14.1875V11.0625ZM17.3125 11.0625C17.3125 10.5547 16.8828 10.125 16.375 10.125C15.8281 10.125 15.4375 10.5547 15.4375 11.0625V14.1875C15.4375 14.7344 15.8281 15.125 16.375 15.125C16.8828 15.125 17.3125 14.7344 17.3125 14.1875V11.0625ZM8.5625 11.0625C8.5625 10.5547 8.13281 10.125 7.625 10.125C7.07812 10.125 6.6875 10.5547 6.6875 11.0625V14.1875C6.6875 14.7344 7.07812 15.125 7.625 15.125C8.13281 15.125 8.5625 14.7344 8.5625 14.1875V11.0625Z" fill="#fff"></path>
          </svg>
          <span href="#" data-name="<?= $product['title'] ?>" data-price="<?= $product['price'] ?>" class="add-to-cart add-to-cart-meals btn btn-primary"> В корзину </span>
        </button>
    </div>
  </div>
<?php endforeach; ?>