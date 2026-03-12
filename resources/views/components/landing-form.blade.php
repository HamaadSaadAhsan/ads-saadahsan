@props(['source', 'consultancy', 'title' => 'Check Your Eligibility', 'subtitle' => 'Share your details and our experts will assess your eligibility.'])

<div class="hero-form">
    <h3 class="form-title">{{ $title }}</h3>
    <p class="form-subtitle">{{ $subtitle }}</p>
    <form id="landing-form"
          x-data="{
              form: { name: '', email: '', phone: '', city: '', country: '', message: '' },
              errors: {},
              submitting: false,
              success: false,
              errorMsg: '',
              async submit() {
                  this.errors = {};
                  this.errorMsg = '';
                  this.submitting = true;
                  try {
                      const res = await fetch('{{ config('forms.api_url') }}', {
                          method: 'POST',
                          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                          body: JSON.stringify({
                              ...this.form,
                              phone: this.form.phone.replace(/[\s\-\(\)]+/g, ''),
                              consultancy: '{{ $consultancy }}',
                              landing_source: '{{ $source }}',
                              website_url: this.$refs.hp.value
                          })
                      });
                      const data = await res.json();
                      if (res.ok && data.success) {
                          this.success = true;
                          this.form = { name: '', email: '', phone: '', city: '', country: '', message: '' };
                          if (window.dataLayer) {
                              dataLayer.push({ event: 'form_submission', landing_source: '{{ $source }}' });
                          }
                      } else if (res.status === 422 && data.errors) {
                          this.errors = data.errors;
                      } else {
                          this.errorMsg = data.message || 'Something went wrong. Please try again.';
                      }
                  } catch (e) {
                      this.errorMsg = 'Network error. Please check your connection and try again.';
                  } finally {
                      this.submitting = false;
                  }
              }
          }"
          x-on:submit.prevent="submit">

        <template x-if="success">
            <div class="alert alert-success alert-dismissible">
                <p>Your form was successfully submitted</p>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        </template>

        <template x-if="errorMsg">
            <div class="alert alert-danger alert-dismissible">
                <p x-text="errorMsg"></p>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        </template>

        <input type="hidden" name="landing_source" value="{{ $source }}">
        <input type="hidden" name="consultancy" value="{{ $consultancy }}">
        <input type="text" name="website_url" value="" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true" x-ref="hp">

        <div class="form-row">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" required placeholder="Your full name" x-model="form.name">
                <template x-if="errors.name"><div class="error-message" x-text="errors.name[0]"></div></template>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required placeholder="+92 300 1234567" x-model="form.phone">
                <template x-if="errors.phone"><div class="error-message" x-text="errors.phone[0]"></div></template>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Your email" x-model="form.email">
                <template x-if="errors.email"><div class="error-message" x-text="errors.email[0]"></div></template>
            </div>
            <div class="form-group">
                <label for="city">City *</label>
                <input type="text" id="city" name="city" required placeholder="Your city" x-model="form.city">
                <template x-if="errors.city"><div class="error-message" x-text="errors.city[0]"></div></template>
            </div>
        </div>
        <div class="form-row full">
            <div class="form-group">
                <label for="country">Country *</label>
                <select id="country" name="country" required x-model="form.country">
                    <option value="">Select country</option>
                </select>
                <template x-if="errors.country"><div class="error-message" x-text="errors.country[0]"></div></template>
            </div>
        </div>
        <div class="form-row full">
            <div class="form-group">
                <label for="message">Message (Optional)</label>
                <textarea id="message" name="message" rows="3" placeholder="Any additional details..." x-model="form.message"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary form-submit" :disabled="submitting">
            <span x-show="!submitting">{{ $slot->isEmpty() ? 'Check Eligibility' : $slot }}</span>
            <span x-show="submitting" x-cloak>Submitting...</span>
        </button>
        <p class="form-note">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
            Your information is secure and confidential
        </p>
    </form>
</div>