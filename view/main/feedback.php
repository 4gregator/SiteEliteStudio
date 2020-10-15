<div id="feedback" class="feedback">
  <div class="feedback__wrapper">
    <img src="/view/img/feedback/photo1.png" alt="Заказать звонок" class="feedback__img">
    <form class="feedback__form" name="feedback">
      <h2 class="feedback__title">Обратная связь</h2>
      <labal for="email" class="feedback__label feedback__label_req">E-mail</labal>
      <input type="email" name="email" class="feedback__input" placeholder=" " pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
      <label for="phone" class="feedback__label feedback__label_req">Телефон</label>
      <input type="tel" name="phone" class="feedback__input" placeholder=" " pattern="^[0-9-+\s()]*$" minlength="11" required>
      <label for="text" class="feedback__label">Сообщение</label>
      <textarea name="text" class="feedback__text"></textarea>
      <button type="submit" class="feedback__button">Отправить</button>
    </form>
  </div>
</div>
<div id="answer" class="feedback">
  <div class="feedback__wrapper">
    <img src="/view/img/feedback/photo2.png" alt="Сообщение отправлено" class="feedback__img">
    <div class="feedback__answer">
      <h2 class="feedback__title">Ваше сообщение отправлено!</h2>
      <p class="feedback__message">В ближайшее время с вами свяжется наш менеджер</p>
      <a href="/" class="feedback__link">На главную</a>
    </div>
  </div>
</div>