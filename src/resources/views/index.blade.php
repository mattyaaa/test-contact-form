@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
 <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例: 山田" required />
            </div>
            <div class="form__input--text">
              <input type="text" name="first_name" placeholder="例: 太郎" required />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label>
                <input type="radio" name="gender" value="male" required /> 男性
              </label>
              <label>
                <input type="radio" name="gender" value="female" required /> 女性
              </label>
              <label>
                <input type="radio" name="gender" value="other" required /> その他
              </label>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例: test@example.com" required />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <div class="phone-group">
              <input type="text" name="phone1" placeholder="090" pattern="\d{3}" required />
              <span class="hyphen">-</span>
              <input type="text" name="phone2" placeholder="1234" pattern="\d{4}" required />
              <span class="hyphen">-</span>
              <input type="text" name="phone3" placeholder="5678" pattern="\d{4}" required />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" />
            </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
              <select name="inquiry_type" required>
                <option value="">選択してください</option>
              </select>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください" required></textarea>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection