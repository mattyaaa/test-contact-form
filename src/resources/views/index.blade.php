@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
 <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post" novalidate>
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="例: 山田" required />
            </div>
            <div class="form__input--text">
              <input type="text" name="first_name" value="{{ old('last_name') }}" placeholder="例: 太郎" required />
            </div>
            <div class="form__error">
                    @error('last_name')
                        <div>{{ $message }}</div>
                    @enderror
                    @error('first_name')
                        <div>{{ $message }}</div>
                    @enderror
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
                <input type="radio" name="gender" value="1" {{ old('gender', '1') == 1 ? 'checked' : '' }} required /> 男性
              </label>
              <label>
                <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }} required /> 女性
              </label>
              <label>
                <input type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : '' }} required /> その他
              </label>
            </div>
            <div class="form__error">
                    @error('gender')
                        <div>{{ $message }}</div>
                    @enderror
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
              <input type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com" required />
            </div>
            <div class="form__error">
                    @error('email')
                        <div>{{ $message }}</div>
                    @enderror
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
              <input type="text" name="phone1" value="{{ old('phone1') }}" placeholder="090" pattern="\d{1,5}" required />
              <span class="hyphen">-</span>
              <input type="text" name="phone2" value="{{ old('phone2') }}" placeholder="1234" pattern="\d{1,5}" required />
              <span class="hyphen">-</span>
              <input type="text" name="phone3" value="{{ old('phone3') }}" placeholder="5678" pattern="\d{1,5}" required />
            </div>
            <div class="form__error">
                        @if($errors->has('phone1') || $errors->has('phone2') || $errors->has('phone3'))
                        @error('phone1')
                        <div>{{ $message }}</div>
                        @enderror
                        @endif
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
              <input type="text" name="address" value="{{ old('address') }}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required />
            </div>
            <div class="form__error">
                    @error('address')
                        <div>{{ $message }}</div>
                    @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" value="{{ old('building') }}" placeholder="例: 千駄ヶ谷マンション101" />
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
                @foreach($categories as $category)
                    <option value="{{ $category->content }}" {{ old('inquiry_type') == $category->content ? 'selected' : '' }}>{{ $category->content }}</option>
                @endforeach
              </select>
            </div>
            <div class="form__error">
                    @error('inquiry_type')
                        <div>{{ $message }}</div>
                    @enderror
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
                    @error('content')
                        <div>{{ $message }}</div>
                    @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection