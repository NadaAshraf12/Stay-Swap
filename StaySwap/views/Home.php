<html>

<head>
    <title>staySwap</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        :root {
            --black: black;
            --relume-library-lite--rl-black: black;
            --relume-library-lite--rl-gray: #f4f4f4;
            --relume-library-lite--rl-white: white;
            --combine-library--grey-600: #5f6570;
            --combine-library--grey-800: #1f2c3d;
            --combine-library--warning-800: #f27900;
            --stayswap-users-feedbacks: var(--white);
            --combine-library--primary-800: #472def;
            --combine-library--secondary-600: #00a1c1;
            --combine-library--grey-050: #f2f3f7;
            --untitled-ui--primary700: #6941c6;
            --untitled-ui--primary600: #7f56d9;
            --untitled-ui--primary100: #f4ebff;
            --untitled-ui--gray600: #475467;
            --untitled-ui--gray900: #101828;
            --untitled-ui--gray700: #344054;
            --untitled-ui--gray400: #98a2b3;
            --untitled-ui--gray500: #667085;
            --untitled-ui--gray200: #eaecf0;
            --untitled-ui--success50: #ecfdf3;
            --untitled-ui--success700: #027a48;
            --untitled-ui--white: white;
            --untitled-ui--primary300: #d6bbfb;
            --untitled-ui--gray300: #d0d5dd;
            --untitled-ui--primary50: #f9f5ff;
            --untitled-ui--gray50: #f9fafb;
            --white: white;
            --untitled-ui--gray800: #1d2939;
            --untitled-ui--gray100: #f2f4f7;
            --untitled-ui--primary800: #53389e;
        }

        .w-layout-grid {
            grid-row-gap: 16px;
            grid-column-gap: 16px;
            grid-template-rows: auto auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .w-checkbox {
            margin-bottom: 5px;
            padding-left: 20px;
            display: block;
        }

        .w-checkbox:before {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-checkbox:after {
            content: " ";
            clear: both;
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-checkbox-input {
            float: left;
            margin: 4px 0 0 -20px;
            line-height: normal;
        }

        .w-checkbox-input--inputType-custom {
            border: 1px solid #ccc;
            border-radius: 2px;
            width: 12px;
            height: 12px;
        }

        .w-checkbox-input--inputType-custom.w--redirected-checked {
            background-color: #3898ec;
            background-image: url('https://d3e54v103j8qbb.cloudfront.net/static/custom-checkbox-checkmark.589d534424.svg');
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            border-color: #3898ec;
        }

        .w-checkbox-input--inputType-custom.w--redirected-focus {
            box-shadow: 0 0 3px 1px #3898ec;
        }

        .traveler-home-header-outdiv {
            color: #fefded;
            background-color: #fefded;
            border: 5px solid #000;
            border-bottom-width: 0;
        }

        .navbar-logo-left-container {
            z-index: 5;
            background-color: rgba(0, 0, 0, 0);
            width: 1030px;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding: 15px 20px;
        }

        .navbar-logo-left-container.shadow-three {
            background-color: #fefded;
            border: 0 solid #000;
            width: 100%;
            max-width: 1140px;
            margin-bottom: 0;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .container {
            width: 100%;
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
        }

        .traveler-header-innerdiv {
            grid-column-gap: 26px;
            grid-row-gap: 26px;
            text-align: center;
            justify-content: space-between;
            align-items: center;
            font-family: Exo, sans-serif;
            font-size: 60px;
            font-weight: 800;
            line-height: 0;
            display: flex;
        }

        .nav-menu-two {
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0;
            display: flex;
        }

        .nav-link {
            letter-spacing: .25px;
            color: #000;
            margin-left: 5px;
            margin-right: 5px;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 20px;
            text-decoration: none;
        }

        .nav-link:hover {
            color: rgba(26, 27, 31, .75);
        }

        .nav-link:focus-visible {
            outline-offset: 0px;
            color: #0050bd;
            border-radius: 4px;
            outline: 2px solid #0050bd;
        }

        .nav-link[data-wf-focus-visible] {
            outline-offset: 0px;
            color: #0050bd;
            border-radius: 4px;
            outline: 2px solid #0050bd;
        }

        .nav-dropdown {
            margin-left: 5px;
            margin-right: 5px;
        }

        .nav-dropdown-toggle {
            letter-spacing: .25px;
            padding: 5px 30px 5px 10px;
            font-size: 14px;
            line-height: 20px;
        }

        .nav-dropdown-toggle:hover {
            color: rgba(26, 27, 31, .75);
        }

        .nav-dropdown-toggle:focus-visible {
            outline-offset: 0px;
            color: #0050bd;
            border-radius: 5px;
            outline: 2px solid #0050bd;
        }

        .nav-dropdown-toggle[data-wf-focus-visible] {
            outline-offset: 0px;
            color: #0050bd;
            border-radius: 5px;
            outline: 2px solid #0050bd;
        }

        .nav-dropdown-icon {
            margin-right: 10px;
        }

        .nav-dropdown-list {
            background-color: #fff;
            border-radius: 12px;
        }

        .nav-dropdown-list.w--open {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .nav-dropdown-link {
            padding-top: 5px;
            padding-bottom: 5px;
            font-size: 14px;
        }

        .nav-dropdown-link:focus-visible {
            outline-offset: 0px;
            color: #0050bd;
            border-radius: 5px;
            outline: 2px solid #0050bd;
        }

        .nav-dropdown-link[data-wf-focus-visible] {
            outline-offset: 0px;
            color: #0050bd;
            border-radius: 5px;
            outline: 2px solid #0050bd;
        }

        .nav-divider {
            background-color: #e4ebf3;
            width: 1px;
            height: 22px;
            margin-left: 15px;
            margin-right: 15px;
        }

        .nav-link-accent {
            transform: scale3d(1none, 1none, 1none) translate(38px, -88px);
            color: #1a1b1f;
            text-align: center;
            letter-spacing: .5px;
            text-transform: capitalize;
            transform-style: preserve-3d;
            margin-left: 5px;
            margin-right: 20px;
            padding: 5px 10px;
            font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;
            font-size: 15px;
            font-weight: 700;
            line-height: 20px;
            text-decoration: underline;
            display: inline;
        }

        .nav-link-accent:hover {
            color: rgba(26, 27, 31, .75);
        }

        .traveler-home-maindiv-button {
            box-shadow: 10px 9px 0 -3px var(--black);
            color: var(--black);
            letter-spacing: 2px;
            text-transform: uppercase;
            mix-blend-mode: normal;
            background-color: #fa7070;
            border: 3px solid #000;
            padding: 12px 25px;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
            font-weight: 700;
            line-height: 20px;
            text-decoration: none;
            transition-property: all;
            transition-duration: .2s;
            transition-timing-function: ease;
        }

        .traveler-home-maindiv-button:hover {
            color: #fff;
            background-color: #32343a;
        }

        .traveler-home-maindiv-button:active {
            background-color: #43464d;
        }

        .traveler-home-maindiv {
            background-color: #fefded;
            border: 4px solid #000;
            border-radius: 0;
            padding: 80px 30px;
            position: relative;
        }

        .hero-wrapper {
            justify-content: space-between;
            align-items: center;
            display: flex;
        }

        .hero-split {
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            max-width: 46%;
            display: flex;
        }

        .traveler-home-maindiv-desc-p {
            margin-bottom: 24px;
        }

        .shadow-two {
            box-shadow: 0 4px 24px rgba(150, 163, 181, .08);
        }

        .traveler-home-maindiv-heading {
            font-family: Changa One, Impact, sans-serif;
        }

        .bold-text {
            font-family: Varela, sans-serif;
        }

        .image {
            cursor: pointer;
        }

        .image.link {
            position: absolute;
        }

        .team-slider {
            background-color: #fefded;
            border: 5px solid #000;
            border-top-width: 0;
            padding: 80px 30px;
            position: relative;
        }

        .container-2 {
            width: 100%;
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
        }

        .centered-heading {
            text-align: center;
            margin-bottom: 16px;
        }

        .centered-subheading {
            text-align: center;
            max-width: 530px;
            margin-left: auto;
            margin-right: auto;
        }

        .team-slider-wrapper {
            background-color: rgba(0, 0, 0, 0);
            height: auto;
            margin-top: 50px;
        }

        .team-slide-wrapper {
            width: 30%;
            margin-right: 5%;
        }

        .team-block {
            background-color: #fff;
            padding-bottom: 24px;
        }

        .team-member-image-two {
            margin-bottom: 18px;
        }

        .team-block-info {
            flex-direction: column;
            align-items: flex-start;
            padding-left: 24px;
            padding-right: 24px;
            display: flex;
        }

        .team-member-name-two {
            margin-bottom: 12px;
            font-weight: 600;
        }

        .team-member-text {
            margin-bottom: 20px;
        }

        .text-link-arrow {
            color: #1a1b1f;
            justify-content: flex-start;
            align-items: center;
            font-size: 14px;
            line-height: 20px;
            text-decoration: none;
            display: flex;
        }

        .arrow-embed {
            margin-left: 2px;
            display: flex;
        }

        .team-slider-arrow {
            display: none;
        }

        .team-slider-nav {
            margin-top: 24px;
            font-size: 10px;
            position: static;
            bottom: -60px;
        }

        .rl-button-link-icon {
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 1rem;
            height: 1rem;
            display: flex;
        }

        .rl-button-link {
            grid-column-gap: .5rem;
            grid-row-gap: .5rem;
            border: 1px none var(--relume-library-lite--rl-black);
            color: var(--relume-library-lite--rl-black);
            text-align: center;
            background-color: rgba(0, 0, 0, 0);
            padding: .25rem 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            line-height: 1;
            text-decoration: none;
            display: flex;
        }

        .rl_blog8_spacing-block-11 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl-text-style-regular {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_blog8_spacing-block-10 {
            width: 100%;
            padding-bottom: .5rem;
        }

        .rl-heading-style-h5 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.4;
        }

        .rl_blog8_spacing-block-9 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl_blog8_read-time-text {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blog8_category-text {
            line-height: 1.5;
        }

        .rl_blog8_category {
            background-color: var(--relume-library-lite--rl-gray);
            color: var(--relume-library-lite--rl-black);
            padding: .25rem .5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.5;
            display: flex;
        }

        .rl_blog8_meta-wrapper {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            align-items: center;
            display: flex;
        }

        .rl_blog8_item-content {
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
            padding: 1.5rem;
            display: flex;
        }

        .rl_blog8_image {
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .rl_blog8_image-wrapper {
            width: 100%;
            padding-top: 66%;
            position: relative;
            overflow: hidden;
        }

        .rl_blog8_item-link {
            flex-direction: column;
            justify-content: flex-start;
            height: 100%;
            text-decoration: none;
            display: flex;
        }

        .rl_blog8_item {
            border: 1px solid var(--relume-library-lite--rl-black);
        }

        .rl_blog8_list {
            grid-column-gap: 2rem;
            grid-row-gap: 4rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            display: grid;
        }

        .rl_blog8_spacing-block-8 {
            width: 100%;
            padding-bottom: 4rem;
        }

        .rl_blog8_menu-link {
            color: var(--relume-library-lite--rl-black);
            white-space: nowrap;
            border: 1px solid rgba(0, 0, 0, 0);
            flex: none;
            padding: .5rem 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-decoration: none;
        }

        .rl_blog8_menu-link.w--current {
            border: 1px solid rgba(0, 0, 0, 0);
        }

        .rl_blog8_menu-link.current {
            border: 1px solid var(--relume-library-lite--rl-black);
        }

        .rl_blog8_category-menu {
            align-items: center;
            width: 100%;
            display: flex;
        }

        .rl_blog8_spacing-block-7 {
            width: 100%;
            padding-bottom: 4rem;
        }

        .rl_blog8_spacing-block-6 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl_blog8_spacing-block-5 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl-heading-style-h4 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.3;
        }

        .rl_blog8_spacing-block-4 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl_blog8_featured-item-content {
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
            height: 100%;
            padding: 3rem;
            display: flex;
        }

        .rl_blog8_featured-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .rl_blog8_featured-image-wrapper {
            width: 100%;
            padding-top: 75%;
            position: relative;
            overflow: hidden;
        }

        .rl_blog8_featured-item-wrapper {
            grid-column-gap: 0px;
            grid-row-gap: 0px;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            align-items: stretch;
            display: grid;
        }

        .rl_blog8_featured-item-link {
            width: 100%;
            text-decoration: none;
        }

        .rl_blog8_featured-item {
            border: 1px solid var(--relume-library-lite--rl-black);
            display: flex;
        }

        .rl_blog5_spacing-block-3 {
            width: 100%;
            padding-bottom: 5rem;
        }

        .rl-text-style-medium {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.125rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_blog8_spacing-block-2 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl-heading-style-h1 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .rl_blog8_spacing-block-1 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl-text-style-subheading {
            color: #000;
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blog8_heading-wrapper {
            width: 100%;
            max-width: 48rem;
        }

        .rl-padding-section-large {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .rl-container-large {
            width: 100%;
            max-width: 80rem;
            margin-left: auto;
            margin-right: auto;
        }

        .rl-padding-global {
            padding-left: 5%;
            padding-right: 5%;
        }

        .rl_section_blog8 {
            background-color: var(--relume-library-lite--rl-white);
        }

        .team-slider-2 {
            background-color: #fefded;
            border: 5px solid #000;
            border-top-width: 0;
            padding: 80px 30px;
            position: relative;
        }

        .container-3 {
            width: 100%;
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
        }

        .centered-heading-2 {
            text-align: center;
            margin-bottom: 16px;
            font-family: Changa One, Impact, sans-serif;
            font-size: 50px;
            font-weight: 700;
            display: inline;
        }

        .centered-subheading-2 {
            text-align: center;
            max-width: 530px;
            margin-left: auto;
            margin-right: auto;
        }

        .team-slider-wrapper-2 {
            background-color: rgba(0, 0, 0, 0);
            height: auto;
            margin-top: 50px;
        }

        .team-slide-wrapper-2 {
            width: 30%;
            margin-right: 5%;
        }

        .team-block-2 {
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            background-color: #c6ebc5;
            border: 3px solid #000;
            grid-template-rows: auto auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            padding-bottom: 24px;
            display: block;
        }

        .team-member-image-two-2 {
            border: 0 solid #000;
            border-bottom-width: 3px;
            margin-bottom: 18px;
        }

        .team-block-info-2 {
            flex-direction: column;
            align-items: flex-start;
            padding-left: 24px;
            padding-right: 24px;
            display: flex;
        }

        .team-member-name-two-2 {
            margin-bottom: 12px;
            font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
            font-weight: 600;
        }

        .team-member-text-2 {
            margin-bottom: 20px;
            font-family: Oswald, sans-serif;
            font-weight: 400;
            display: inline-flex;
        }

        .text-link-arrow-2 {
            color: #1a1b1f;
            justify-content: flex-start;
            align-items: center;
            font-size: 14px;
            line-height: 20px;
            text-decoration: none;
            display: flex;
        }

        .arrow-embed-2 {
            margin-left: 2px;
            display: flex;
        }

        .team-slider-arrow-2 {
            display: none;
        }

        .team-slider-nav-2 {
            margin-top: 24px;
            font-size: 10px;
            position: static;
            bottom: -60px;
        }

        .bold-text-2 {
            font-family: Verdana, Geneva, sans-serif;
        }

        .bold-text-3 {
            font-weight: 400;
        }

        .image-2 {
            display: inline-flex;
        }

        .text-block {
            margin-left: 0;
            margin-right: 0;
            font-family: Impact, Haettenschweiler, Franklin Gothic Bold, Charcoal, sans-serif;
            display: inline;
        }

        .image-3 {
            border-bottom: 3px solid #000;
        }

        .image-4 {
            display: block;
        }

        .button {
            float: right;
            color: var(--black);
            background-color: #c6ebc5;
            border: 2px solid #000;
            border-bottom-width: 3px;
            margin-top: 50px;
            margin-right: 60px;
            font-family: Verdana, Geneva, sans-serif;
            font-weight: 700;
        }

        .combine-text-size-regular {
            color: var(--combine-library--grey-600);
            margin-bottom: 0;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .combine-text-weight-semibold {
            color: var(--combine-library--grey-800);
            margin-bottom: 0;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .combine-clients4_image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .combine-clients4_image-wrapper {
            border-radius: 4rem;
            width: 3.5rem;
            height: 3.5rem;
            overflow: hidden;
        }

        .combine-clients4_client {
            grid-column-gap: .75rem;
            grid-row-gap: 0rem;
            grid-template-rows: auto auto;
            grid-template-columns: max-content 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .combine-clients4_span-tertiary {
            color: var(--combine-library--warning-800);
            background-color: rgba(248, 179, 75, .18);
        }

        .combine-clients4_item {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            background-color: var(--stayswap-users-feedbacks);
            border: 3px solid #000;
            border-radius: 0;
            flex-direction: column;
            padding: 1.5rem;
            display: flex;
        }

        .combine-clients4_span-primary {
            color: var(--combine-library--primary-800);
            background-color: rgba(97, 87, 248, .18);
        }

        .combine-clients4_wrapper {
            grid-column-gap: 1.5rem;
            grid-row-gap: 1.5rem;
            flex-direction: column;
            display: flex;
        }

        .combine-clients4_span-secondary {
            color: var(--combine-library--secondary-600);
            background-color: rgba(0, 161, 193, .18);
        }

        .combine-clients4_grid {
            grid-column-gap: 1.5rem;
            grid-row-gap: 1.5rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            grid-auto-columns: 1fr;
            align-items: flex-start;
            width: 100%;
            display: grid;
        }

        .combine-container-large {
            width: 100%;
            max-width: 75rem;
            margin-left: auto;
            margin-right: auto;
        }

        .combine-space-large {
            height: 4rem;
        }

        .combine-space-medium {
            width: 100%;
            height: 1.5rem;
        }

        .combine-heading-style-h2 {
            color: var(--combine-library--grey-800);
            margin-top: 0;
            margin-bottom: 0;
            font-family: Exo, sans-serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.35;
        }

        .combine-text-align-center {
            text-align: center;
        }

        .combine-container-small {
            width: 100%;
            max-width: 48rem;
            margin-left: auto;
            margin-right: auto;
        }

        .combine-padding-section-medium {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .combine-padding-global {
            background-color: #fefded;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .combine-section_clients4 {
            background-color: var(--combine-library--grey-050);
        }

        .rl-text-style-regular-2 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_testimonial17_name-text {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_testimonial17_customer-image {
            object-fit: cover;
            border-radius: 100%;
            width: 3rem;
            min-width: 3rem;
            height: 3rem;
            min-height: 3rem;
        }

        .rl_testimonial17_customer {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            text-align: left;
            align-items: center;
            display: flex;
        }

        .rl_testimonial17_spacing-block-4 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl-text-style-medium-2 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.125rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_testimonial17_rating-icon {
            color: var(--relume-library-lite--rl-black);
            flex-direction: column;
            width: 1.25rem;
            height: 1.25rem;
            display: flex;
        }

        .rl_testimonial17_rating-wrapper {
            grid-column-gap: .25rem;
            grid-row-gap: .25rem;
            display: flex;
        }

        .rl_testimonial17_testimonial {
            border-top-style: solid;
            border-top-width: 3px;
            border-top-color: var(--relume-library-lite--rl-black);
            border-right-style: solid;
            border-right-width: 3px;
            border-right-color: var(--relume-library-lite--rl-black);
            border-bottom-style: solid;
            border-bottom-width: 4px;
            border-bottom-color: var(--relume-library-lite--rl-black);
            border-left-style: solid;
            border-left-width: 3px;
            border-left-color: var(--relume-library-lite--rl-black);
            background-color: #fa7070;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            width: 100%;
            padding: 2rem;
            display: flex;
        }

        .rl_testimonial17_testimonial-list {
            grid-column-gap: 2rem;
            grid-row-gap: 2rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            grid-auto-columns: 1fr;
            align-items: stretch;
            display: grid;
        }

        .rl_testimonial17_spacing-block-2 {
            width: 100%;
            padding-bottom: 5rem;
        }

        .rl_testimonial17_spacing-block-1 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl-heading-style-h2 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .rl_testimonial17_heading-wrapper {
            text-align: center;
            width: 100%;
            max-width: 48rem;
        }

        .rl_testimonial17_component {
            flex-direction: column;
            align-items: center;
            display: flex;
        }

        .rl-padding-section-large-2 {
            background-color: #fefded;
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .rl-container-large-2 {
            width: 100%;
            max-width: 80rem;
            margin-left: auto;
            margin-right: auto;
        }

        .rl-padding-global-2 {
            background-color: #fefded;
            border: 5px solid #000;
            border-top-width: 0;
            padding-left: 5%;
            padding-right: 5%;
        }

        .rl_section_testimonial17 {
            background-color: var(--relume-library-lite--rl-white);
        }

        .articles-view-all-btn {
            border: 1px solid var(--relume-library-lite--rl-black);
            background-color: var(--relume-library-lite--rl-black);
            color: var(--relume-library-lite--rl-white);
            text-align: center;
            padding: .75rem 1.5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
        }

        .articles-view-all-btn.is-secondary {
            color: var(--relume-library-lite--rl-black);
            background-color: #c6ebc5;
            border-bottom-width: 3px;
        }

        .rl_blog33_spacing-block-8 {
            width: 100%;
            padding-bottom: 4rem;
        }

        .rl-text-style-small {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_blog33_text-divider {
            color: var(--relume-library-lite--rl-black);
        }

        .rl_blog33_date-wrapper {
            grid-column-gap: .5rem;
            grid-row-gap: .5rem;
            align-items: center;
            display: flex;
        }

        .rl_blog33_author-text {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blog33_author-image {
            object-fit: cover;
            border-radius: 100%;
            width: 3rem;
            min-width: 3rem;
            height: 3rem;
            min-height: 3rem;
        }

        .rl_blog33_author-wrapper {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            align-items: center;
            display: flex;
        }

        .rl_blog33_spacing-block-7 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl_blog33_spacing-block-6 {
            width: 100%;
            padding-bottom: .5rem;
        }

        .rl-heading-style-h5-2 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.4;
        }

        .rl_blog3_title-link {
            text-decoration: none;
            display: block;
        }

        .rl_blog33_spacing-block-5 {
            width: 100%;
            padding-bottom: .5rem;
        }

        .rl_blog33_category-link {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            text-decoration: none;
        }

        .rl_blog33_category-link.w--current {
            border-bottom: 2px solid #000;
        }

        .rl_blog33_spacing-block-4 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl_blog33_image {
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .rl_blog33_image-wrapper {
            width: 100%;
            padding-top: 66%;
            position: relative;
            overflow: hidden;
        }

        .rl_blog33_image-link {
            width: 100%;
            display: block;
        }

        .rl_blog33_item {
            border: 3px solid #000;
        }

        .rl_blog33_list {
            grid-column-gap: 2rem;
            grid-row-gap: 4rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .rl_blog33_spacing-block-3 {
            width: 100%;
            padding-bottom: 5rem;
        }

        .rl_blog33_spacing-block-2 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl_blog33_spacing-block-1 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl-text-style-subheading-2 {
            color: #000;
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blog33_heading-wrapper {
            text-align: center;
            width: 100%;
            max-width: 48rem;
            margin-left: auto;
            margin-right: auto;
        }

        .rl_blog33_component {
            flex-direction: column;
            align-items: center;
            display: flex;
        }

        .rl-padding-section-large-3 {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .rl-padding-global-3 {
            padding-left: 5%;
            padding-right: 5%;
        }

        .rl_section_blog33 {
            background-color: var(--relume-library-lite--rl-white);
        }

        .rl_blog44_spacing-block-7 {
            width: 100%;
            padding-bottom: 4rem;
        }

        .rl_blog44_button-row-mobile {
            flex-wrap: wrap;
            justify-content: flex-end;
            align-items: center;
            display: none;
        }

        .rl-button-link-icon-2 {
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 1rem;
            height: 1rem;
            display: flex;
        }

        .rl-button-link-2 {
            grid-column-gap: .5rem;
            grid-row-gap: .5rem;
            border: 1px none var(--relume-library-lite--rl-black);
            color: var(--relume-library-lite--rl-black);
            text-align: center;
            background-color: rgba(0, 0, 0, 0);
            padding: .25rem 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            line-height: 1;
            text-decoration: none;
            display: flex;
        }

        .rl_blog44_spacing-block-6 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl_blog44_spacing-block-5 {
            width: 100%;
            padding-bottom: .5rem;
        }

        .rl_blog44_spacing-block-4 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl_blog44_read-time-text {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blog44_category {
            color: var(--relume-library-lite--rl-black);
            background-color: #bce6bb;
            padding: .25rem .5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.5;
            display: flex;
        }

        .rl_blog44_meta-wrapper {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            align-items: center;
            display: flex;
        }

        .articlse-divs-view {
            background-color: #c6ebc5;
            border: 3px solid #000;
            border-right-width: 2px;
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
            padding: 1.5rem;
            display: flex;
        }

        .article-div-view-img {
            object-fit: cover;
            border: 3px solid #000;
            border-bottom-width: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .rl_blog44_image-wrapper {
            width: 100%;
            padding-top: 66%;
            position: relative;
            overflow: hidden;
        }

        .rl_blog44_item-link {
            flex-direction: column;
            justify-content: flex-start;
            height: 100%;
            text-decoration: none;
            display: flex;
        }

        .rl_blog44_item {
            border: 1px solid var(--relume-library-lite--rl-black);
        }

        .rl_blog44_list {
            grid-column-gap: 2rem;
            grid-row-gap: 4rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            display: grid;
        }

        .rl_blog44_spacing-block-3 {
            width: 100%;
            padding-bottom: 5rem;
        }

        .rl_blog44_button-row-desktop {
            flex-wrap: wrap;
            justify-content: flex-end;
            align-items: center;
            display: flex;
        }

        .rl_blog44_spacing-block-2 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl_blog44_spacing-block-1 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl_blog44_heading {
            flex: 1;
        }

        .rl_blog44_heading-wrapper {
            grid-column-gap: 5rem;
            grid-row-gap: 1rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr max-content;
            grid-auto-columns: 1fr;
            justify-content: space-between;
            align-items: end;
            display: grid;
        }

        .rl-padding-section-large-4 {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .rl-padding-global-4 {
            background-color: #fefded;
            border: 5px solid #000;
            border-top-width: 0;
            padding-left: 5%;
            padding-right: 5%;
        }

        .rl_section_blog44 {
            background-color: var(--relume-library-lite--rl-white);
        }

        .bold-text-4 {
            margin-left: 0;
            margin-right: 0;
            display: block;
        }

        .image-5 {
            margin-left: auto;
            margin-right: 0;
        }

        .uui-button {
            grid-column-gap: .5rem;
            color: var(--black);
            text-align: center;
            white-space: nowrap;
            background-color: #fa7070;
            border: 3px solid #000;
            border-width: 2px 3px 3px 2px;
            border-radius: 0;
            justify-content: center;
            align-items: center;
            padding: .625rem 1.125rem;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            text-decoration: none;
            transition-property: all;
            transition-duration: .3s;
            transition-timing-function: ease;
            display: flex;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .05);
        }

        .uui-button:hover {
            border-color: var(--untitled-ui--primary700);
            background-color: var(--untitled-ui--primary700);
        }

        .uui-button:focus {
            background-color: var(--untitled-ui--primary600);
            box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05), 0 0 0 4px var(--untitled-ui--primary100);
        }

        .uui-button.is-button-small {
            grid-column-gap: .5rem;
            border-width: 2px 2px 3px;
            border-color: var(--black);
            border-radius: 0;
            padding: .5rem 1rem;
        }

        .uui-faq05_cta-button-row {
            flex-wrap: wrap;
            align-items: center;
            display: flex;
        }

        .uui-text-size-large {
            color: var(--untitled-ui--gray600);
            letter-spacing: normal;
            font-family: Exo, sans-serif;
            font-size: 1.125rem;
            line-height: 1.5;
        }

        .uui-space-xxsmall {
            width: 100%;
            min-height: .5rem;
        }

        .uui-heading-xxsmall {
            color: var(--untitled-ui--gray900);
            letter-spacing: normal;
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.25rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .uui-max-width-large {
            width: 100%;
            max-width: 48rem;
        }

        .uui-max-width-large.align-center {
            margin-left: auto;
            margin-right: auto;
        }

        .uui-faq05_cta-content {
            flex: 1;
        }

        .uui-faq05_cta {
            grid-column-gap: 5rem;
            grid-row-gap: 1rem;
            background-color: #c6ebc5;
            border: 2px solid #000;
            border-top-width: 3px;
            border-radius: 0;
            grid-template-rows: auto;
            grid-template-columns: 1fr max-content;
            grid-auto-columns: 1fr;
            justify-content: space-between;
            align-items: start;
            margin-top: 4rem;
            padding: 2rem;
            font-family: Verdana, Geneva, sans-serif;
            display: grid;
        }

        .uui-text-size-medium {
            color: var(--untitled-ui--gray600);
            letter-spacing: normal;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5;
        }

        .uui-heading-tiny {
            color: var(--untitled-ui--gray900);
            letter-spacing: normal;
            margin-top: 0;
            margin-bottom: 0;
            font-family: Exo, sans-serif;
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .uui-faq05_layout {
            grid-column-gap: 2rem;
            grid-row-gap: 4rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            grid-auto-columns: 1fr;
            align-items: start;
            justify-items: start;
            display: grid;
        }

        .uui-faq05_component {
            margin-top: 4rem;
        }

        .uui-text-style-link {
            color: var(--untitled-ui--gray600);
            text-decoration: underline;
            transition: color .3s;
        }

        .uui-text-style-link:hover {
            color: var(--untitled-ui--gray700);
        }

        .uui-space-xsmall {
            width: 100%;
            min-height: 1rem;
        }

        .uui-heading-medium {
            color: var(--untitled-ui--gray900);
            margin-top: 0;
            margin-bottom: 0;
            font-family: Exo, sans-serif;
            font-size: 2.25rem;
            font-weight: 600;
            line-height: 1.3;
        }

        .uui-heading-subheading {
            color: #fa7070;
            background-color: #fefded;
            margin-bottom: .75rem;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .uui-padding-vertical-xhuge {
            border-top: 1px solid #fefded;
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .uui-container-large {
            width: 100%;
            max-width: 80rem;
            margin-left: auto;
            margin-right: auto;
        }

        .uui-page-padding {
            background-color: #fefded;
            border: 5px solid #000;
            border-top-width: 0;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .testimonial-slider-large {
            background-color: #fefded;
            border-bottom: 1px solid #e4ebf3;
            padding: 80px 30px;
            position: relative;
        }

        .container-4 {
            width: 100%;
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
        }

        .testimonial-slider-two {
            background-color: rgba(0, 0, 0, 0);
            height: auto;
        }

        .testimonial-slide {
            background-color: #fa7070;
            border: 3px solid #000;
            justify-content: space-between;
            align-items: center;
            padding: 12px 12px 12px 64px;
            display: flex;
        }

        .testimonial-content {
            flex-direction: column;
            align-items: flex-start;
            max-width: 460px;
            margin-right: 40px;
            display: flex;
        }

        .testimonial-quote-icon {
            color: #fefded;
            margin-bottom: 24px;
        }

        .testimonial-quote {
            margin-bottom: 32px;
            font-size: 24px;
            font-weight: 600;
            line-height: 32px;
        }

        .testimonial-info-two {
            align-items: center;
            display: flex;
        }

        .testimonial-image {
            object-fit: cover;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-right: 16px;
        }

        .testimonial-author-name {
            font-weight: 700;
        }

        .testimonial-image-two {
            object-fit: cover;
            border: 3px solid #000;
            width: 350px;
            height: 400px;
        }

        .testimonial-author-image-three {
            object-fit: cover;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 24px;
        }

        .testimonial-slider-arrow {
            display: none;
        }

        .testimonial-slider-nav {
            margin-top: 24px;
            font-size: 10px;
            position: static;
            bottom: -60px;
        }

        .uui-footer05_social-icon {
            width: 1.5rem;
            height: 1.5rem;
        }

        .uui-footer05_social-link {
            color: var(--untitled-ui--gray400);
            align-items: center;
            text-decoration: none;
            transition: all .3s;
            display: flex;
        }

        .uui-footer05_social-link:hover {
            color: var(--untitled-ui--gray500);
        }

        .uui-footer05_social-icons {
            grid-column-gap: 1.5rem;
            grid-row-gap: 0rem;
            white-space: normal;
            grid-template-rows: auto;
            grid-template-columns: max-content;
            grid-auto-columns: max-content;
            grid-auto-flow: column;
            align-items: start;
            justify-items: start;
            display: grid;
        }

        .uui-footer05_legal-link {
            color: var(--untitled-ui--gray500);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            text-decoration: none;
            transition: all .3s;
        }

        .uui-footer05_legal-link:hover {
            color: var(--untitled-ui--gray600);
        }

        .uui-footer05_legal-list {
            grid-column-gap: 1rem;
            grid-row-gap: 0rem;
            white-space: normal;
            grid-template-rows: auto;
            grid-template-columns: max-content;
            grid-auto-columns: max-content;
            grid-auto-flow: column;
            justify-content: center;
            display: grid;
        }

        .uui-text-size-small {
            color: var(--untitled-ui--gray600);
            letter-spacing: normal;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            line-height: 1.5;
        }

        .uui-text-size-small.text-color-gray500 {
            color: var(--untitled-ui--gray500);
        }

        .uui-footer05_legal-list-wrapper {
            grid-column-gap: 1.5rem;
            display: flex;
        }

        .uui-footer05_bottom-wrapper {
            border-top: 1px solid var(--untitled-ui--gray200);
            justify-content: space-between;
            align-items: center;
            margin-top: 4rem;
            padding-top: 2rem;
            display: flex;
        }

        .uui-footer05_link {
            grid-column-gap: .5rem;
            color: var(--untitled-ui--gray600);
            flex-wrap: nowrap;
            align-items: center;
            padding-top: .5rem;
            padding-bottom: .5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all .3s;
            display: flex;
        }

        .uui-footer05_link:hover {
            color: var(--untitled-ui--gray700);
        }

        .uui-footer05_link-list-heading {
            color: var(--untitled-ui--gray500);
            letter-spacing: normal;
            margin-bottom: 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
        }

        .uui-footer05_link-list {
            flex-direction: column;
            grid-template-rows: auto;
            grid-template-columns: 100%;
            grid-auto-columns: 100%;
            align-items: flex-start;
            justify-items: start;
            display: flex;
        }

        .uui-badge-small-success {
            grid-column-gap: .25rem;
            background-color: var(--untitled-ui--success50);
            color: var(--untitled-ui--success700);
            white-space: nowrap;
            mix-blend-mode: multiply;
            border-radius: 10rem;
            align-items: center;
            padding: .125rem .5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .75rem;
            font-weight: 500;
            display: flex;
        }

        .uui-logo_image {
            flex: none;
            width: auto;
            height: 100%;
            display: none;
        }

        .uui-logo_logotype {
            flex: none;
            width: auto;
            height: 100%;
        }

        .uui-logo_logomark-dot {
            z-index: 1;
            background-image: linear-gradient(26.5deg, #6941c6, #53389e);
            border-radius: 50%;
            width: 50%;
            height: 50%;
            position: relative;
        }

        .uui-logo_logomark-blur {
            z-index: 2;
            -webkit-backdrop-filter: blur(3px);
            backdrop-filter: blur(3px);
            background-color: rgba(255, 255, 255, .2);
            border-bottom-right-radius: .5rem;
            border-bottom-left-radius: .5rem;
            width: 100%;
            height: 50%;
            position: absolute;
            top: 50%;
            bottom: 0%;
            left: 0%;
            right: 0%;
            overflow: hidden;
        }

        .uui-styleguide_logomark-bg {
            border-radius: 8px;
            width: 2rem;
            height: 2rem;
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .uui-logo_logomark {
            border: .1px solid #dae0e8;
            border-radius: .5rem;
            flex: none;
            justify-content: center;
            align-items: center;
            width: 2rem;
            height: 2rem;
            display: flex;
            position: relative;
            overflow: hidden;
            box-shadow: 0 1px 1px rgba(16, 24, 40, .06), 0 1px 2px rgba(16, 24, 40, .1);
        }

        .uui-logo_component {
            flex-wrap: nowrap;
            width: auto;
            height: 2rem;
            display: flex;
        }

        .uui-footer05_top-wrapper {
            grid-column-gap: 2rem;
            grid-row-gap: 1rem;
            grid-template-rows: auto;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr 1fr;
            align-items: start;
            justify-items: start;
        }

        .error-message {
            margin-top: 1.5rem;
            padding: .875rem 1rem;
        }

        .success-message {
            background-color: #f4f4f4;
            padding: 1.5rem;
        }

        .uui-form_input {
            background-color: var(--untitled-ui--white);
            color: var(--untitled-ui--gray900);
            border: 2px solid #000;
            border-bottom-width: 3px;
            border-radius: .5rem;
            height: auto;
            min-height: 2.75rem;
            margin-bottom: 0;
            padding: .5rem .875rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5;
            transition: all .3s;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .05);
        }

        .uui-form_input:focus {
            border-color: var(--untitled-ui--primary300);
            box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05), 0 0 0 4px var(--untitled-ui--primary100);
            color: var(--untitled-ui--gray900);
        }

        .uui-form_input::placeholder {
            color: var(--untitled-ui--gray500);
        }

        .uui-footer05_form {
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            grid-template-rows: auto;
            grid-template-columns: 1fr max-content;
            grid-auto-columns: 1fr;
            margin-bottom: .75rem;
            display: grid;
        }

        .uui-footer05_form-block {
            min-width: 25rem;
            max-width: 35rem;
            margin-bottom: 0;
        }

        .uui-footer05_newsletter-wrapper {
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 4rem;
            display: flex;
        }

        .uui-padding-vertical-xlarge {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .f-and-q-div {
            background-color: #fefded;
            border: 5px solid #000;
            border-top-width: 0;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .text-block-2 {
            font-family: Exo, sans-serif;
        }

        .error-text {
            color: #e23939;
        }

        .success-text {
            font-weight: 600;
        }

        .uui-form-button-wrapper {
            flex-direction: column;
            margin-top: .5rem;
            display: flex;
        }

        .uui-form-checkbox-label {
            color: var(--untitled-ui--gray700);
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
        }

        .uui-form-checkbox-icon {
            border: 1px solid var(--untitled-ui--gray300);
            background-color: var(--untitled-ui--white);
            cursor: pointer;
            border-radius: .375rem;
            width: 1.25rem;
            min-width: 1.25rem;
            height: 1.25rem;
            min-height: 1.25rem;
            margin-top: 0;
            margin-left: -1.25rem;
            margin-right: .75rem;
            transition: all .3s;
        }

        .uui-form-checkbox-icon:hover {
            border-color: var(--untitled-ui--primary600);
            background-color: var(--untitled-ui--primary50);
        }

        .uui-form-checkbox-icon.w--redirected-checked {
            border-width: 1px;
            border-color: var(--untitled-ui--primary600);
            background-color: var(--untitled-ui--primary50);
            box-shadow: none;
            background-image: url('../images/check.svg');
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: .875rem .875rem;
            background-attachment: scroll;
            border-radius: .25rem;
        }

        .uui-form-checkbox-icon.w--redirected-focus {
            border-color: var(--untitled-ui--primary600);
            background-color: var(--untitled-ui--primary50);
            box-shadow: 0 0 0 4px var(--untitled-ui--primary100);
            border-radius: .25rem;
        }

        .uui-form-checkbox {
            align-items: center;
            margin-bottom: 0;
            padding-left: 1.25rem;
            display: flex;
        }

        .uui-form_input-2 {
            border: 1px solid var(--untitled-ui--gray300);
            background-color: var(--untitled-ui--white);
            color: var(--untitled-ui--gray900);
            border-radius: .5rem;
            height: auto;
            min-height: 2.75rem;
            margin-bottom: 0;
            padding: .5rem .875rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5;
            transition: all .3s;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .05);
        }

        .uui-form_input-2:focus {
            border-color: var(--untitled-ui--primary300);
            box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05), 0 0 0 4px var(--untitled-ui--primary100);
            color: var(--untitled-ui--gray900);
        }

        .uui-form_input-2::placeholder {
            color: var(--untitled-ui--gray500);
        }

        .uui-form_input-2.text-area {
            height: auto;
            min-height: 11.25rem;
            padding-top: .75rem;
            padding-bottom: .75rem;
            overflow: auto;
        }

        .uui-form_input-2.select {
            color: var(--untitled-ui--gray900);
            background-color: #fff;
        }

        .uui-field-label {
            color: var(--untitled-ui--gray700);
            margin-bottom: .5rem;
            font-family: Verdana, Geneva, sans-serif;
            font-size: .875rem;
            font-weight: 500;
            line-height: 1.5;
        }

        .uui-form-field-wrapper {
            position: relative;
        }

        .uui-form-radio-label {
            color: var(--untitled-ui--gray700);
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-weight: 500;
        }

        .uui-form-radio-icon {
            border: 1px solid var(--untitled-ui--gray300);
            background-color: var(--untitled-ui--white);
            cursor: pointer;
            border-radius: 100px;
            width: 1.25rem;
            min-width: 1.25rem;
            height: 1.25rem;
            min-height: 1.25rem;
            margin-top: 0;
            margin-left: -1.125rem;
            margin-right: .75rem;
            transition: all .3s;
        }

        .uui-form-radio-icon:hover {
            border-color: var(--untitled-ui--primary600);
            background-color: var(--untitled-ui--primary50);
        }

        .uui-form-radio-icon.w--redirected-checked {
            border-width: 1px;
            border-color: var(--untitled-ui--primary600);
            background-color: var(--untitled-ui--primary50);
            background-image: url('../images/check-circle.svg');
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: auto;
        }

        .uui-form-radio-icon.w--redirected-focus {
            border-color: var(--untitled-ui--primary600);
            background-color: var(--untitled-ui--primary50);
            box-shadow: 0 0 0 4px var(--untitled-ui--primary100);
            margin-top: 0;
        }

        .uui-form-radio-icon.tick-icon.w--redirected-checked {
            background-color: var(--untitled-ui--primary600);
            background-image: url('../images/check-tick.svg');
        }

        .uui-form-radio {
            align-items: center;
            margin-bottom: 0;
            padding-left: 1.125rem;
            display: flex;
        }

        .form-radio-2col {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            margin-top: 1rem;
            display: grid;
        }

        .form-field-2col {
            grid-column-gap: 1.5rem;
            grid-row-gap: 1.5rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .uui-contact02_form {
            grid-column-gap: 1.5rem;
            grid-row-gap: 1.5rem;
            grid-template-rows: auto auto;
            grid-template-columns: 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .uui-contact02_component {
            flex-direction: column;
            align-items: stretch;
            max-width: 35rem;
            margin: 4rem auto 0;
        }

        .align-center {
            margin-left: auto;
            margin-right: auto;
        }

        .uui-text-align-center {
            text-align: center;
        }

        .uui-container-small {
            width: 100%;
            max-width: 48rem;
            margin-left: auto;
            margin-right: auto;
        }

        .uui-footer04_legal-link {
            color: var(--untitled-ui--gray500);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            text-decoration: none;
            transition: all .3s;
        }

        .uui-footer04_legal-link:hover {
            color: var(--untitled-ui--gray600);
        }

        .uui-footer04_legal-list {
            grid-column-gap: 1rem;
            grid-row-gap: 0rem;
            white-space: normal;
            grid-template-rows: auto;
            grid-template-columns: max-content;
            grid-auto-columns: max-content;
            grid-auto-flow: column;
            justify-content: center;
            display: grid;
        }

        .uui-footer04_bottom-wrapper {
            grid-column-gap: 1.5rem;
            border-top: 1px solid var(--untitled-ui--gray200);
            justify-content: center;
            margin-top: 4rem;
            padding-top: 2rem;
            display: flex;
        }

        .uui-footer04_social-icon {
            width: 1.5rem;
            height: 1.5rem;
        }

        .uui-footer04_social-link {
            color: var(--untitled-ui--gray400);
            align-items: center;
            text-decoration: none;
            transition: all .3s;
            display: flex;
        }

        .uui-footer04_social-link:hover {
            color: var(--untitled-ui--gray500);
        }

        .uui-footer04_social-list {
            grid-column-gap: 1.5rem;
            grid-row-gap: 0rem;
            white-space: normal;
            grid-template-rows: auto;
            grid-template-columns: max-content;
            grid-auto-columns: max-content;
            grid-auto-flow: column;
            align-items: start;
            justify-items: start;
            display: grid;
        }

        .uui-footer04_link {
            grid-column-gap: .5rem;
            color: var(--untitled-ui--gray600);
            text-align: center;
            flex-wrap: nowrap;
            align-items: center;
            padding: .5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all .3s;
            display: flex;
        }

        .uui-footer04_link:hover {
            color: var(--untitled-ui--gray700);
        }

        .uui-footer04_link-list {
            grid-column-gap: 1rem;
            grid-row-gap: 0rem;
            white-space: normal;
            grid-template-rows: auto;
            grid-template-columns: auto;
            grid-auto-columns: auto;
            grid-auto-flow: column;
            justify-content: center;
            justify-items: start;
            display: grid;
        }

        .uui-footer04_top-wrapper {
            grid-column-gap: 4vw;
            grid-row-gap: 0rem;
            grid-template-rows: auto;
            grid-template-columns: .25fr 1fr .25fr;
            justify-content: space-between;
            align-items: center;
        }

        .footer {
            background-color: #fefded;
            border: 5px solid #000;
            border-top-width: 0;
            padding: 50px 30px 15px;
            font-family: Verdana, Geneva, sans-serif;
            position: relative;
        }

        .footer-wrapper {
            justify-content: space-between;
            align-items: flex-start;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }

        .footer-content {
            grid-column-gap: 70px;
            grid-row-gap: 40px;
            grid-template-rows: auto;
            grid-template-columns: auto auto 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .footer-block {
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            display: flex;
        }

        .title-small {
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 12px;
            font-size: 14px;
            font-weight: 700;
            line-height: 16px;
        }

        .footer-link {
            color: #1a1b1f;
            margin-top: 12px;
            margin-bottom: 6px;
            font-size: 14px;
            line-height: 16px;
            text-decoration: none;
        }

        .footer-link:hover {
            color: rgba(26, 27, 31, .75);
        }

        .footer-social-block {
            justify-content: flex-start;
            align-items: center;
            margin-top: 12px;
            margin-left: -12px;
            display: flex;
        }

        .footer-social-link {
            margin-left: 12px;
        }

        .footer-divider {
            background-color: #e4ebf3;
            width: 100%;
            height: 1px;
            margin-top: 70px;
            margin-bottom: 15px;
        }

        .footer-copyright-center {
            text-align: center;
            font-size: 14px;
            line-height: 16px;
        }

        .rl-button {
            border: 1px solid var(--relume-library-lite--rl-black);
            background-color: var(--relume-library-lite--rl-black);
            color: var(--relume-library-lite--rl-white);
            text-align: center;
            padding: .75rem 1.5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
        }

        .rl-button.is-secondary {
            color: var(--relume-library-lite--rl-black);
            background-color: rgba(0, 0, 0, 0);
            border-bottom-width: 2px;
            font-family: Exo, sans-serif;
            font-weight: 700;
        }

        .rl_blog33_spacing-block-8-2 {
            width: 100%;
            padding-bottom: 4rem;
        }

        .rl-text-style-small-2 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: Lato, sans-serif;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_blog33_text-divider-2 {
            color: var(--relume-library-lite--rl-black);
        }

        .rl_blog33_date-wrapper-2 {
            grid-column-gap: .5rem;
            grid-row-gap: .5rem;
            align-items: center;
            display: flex;
        }

        .rl_blog33_author-text-2 {
            color: var(--relume-library-lite--rl-black);
            font-family: Exo, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blog33_author-image-2 {
            object-fit: cover;
            border-radius: 100%;
            width: 3rem;
            min-width: 3rem;
            height: 3rem;
            min-height: 3rem;
        }

        .rl_blog33_author-wrapper-2 {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            align-items: center;
            display: flex;
        }

        .rl_blog33_spacing-block-7-2 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl-text-style-regular-3 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_blog33_spacing-block-6-2 {
            width: 100%;
            padding-bottom: .5rem;
        }

        .rl-heading-style-h5-3 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: Exo, sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.4;
        }

        .rl_blog3_title-link-2 {
            text-decoration: none;
            display: block;
        }

        .rl_blog33_spacing-block-5-2 {
            width: 100%;
            padding-bottom: .5rem;
        }

        .rl_blog33_category-link-2 {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            text-decoration: none;
        }

        .rl_blog33_category-link-2.w--current {
            border-bottom: 2px solid #000;
        }

        .rl_blog33_spacing-block-4-2 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl_blog33_image-2 {
            object-fit: cover;
            border: 3px solid #000;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .rl_blog33_image-wrapper-2 {
            width: 100%;
            padding-top: 66%;
            position: relative;
            overflow: hidden;
        }

        .rl_blog33_image-link-2 {
            width: 100%;
            display: block;
        }

        .rl_blog33_list-2 {
            grid-column-gap: 2rem;
            grid-row-gap: 4rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .rl_blog33_spacing-block-3-2 {
            width: 100%;
            padding-bottom: 5rem;
        }

        .rl-text-style-medium-3 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.125rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_blog33_spacing-block-2-2 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl-heading-style-h2-2 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .rl_blog33_spacing-block-1-2 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl-text-style-subheading-3 {
            color: #000;
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blog33_heading-wrapper-2 {
            text-align: center;
            width: 100%;
            max-width: 48rem;
            margin-left: auto;
            margin-right: auto;
        }

        .rl_blog33_component-2 {
            flex-direction: column;
            align-items: center;
            display: flex;
        }

        .rl-padding-section-large-5 {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .rl-container-large-3 {
            width: 100%;
            max-width: 80rem;
            margin-left: auto;
            margin-right: auto;
        }

        .rl-padding-global-5 {
            padding-left: 5%;
            padding-right: 5%;
        }

        .rl_section_blog33-2 {
            background-color: var(--relume-library-lite--rl-white);
        }

        .hero-heading-left-2 {
            background-color: #f5f7fa;
            border-bottom: 1px solid #e4ebf3;
            padding: 80px 30px;
            position: relative;
        }

        .container-5 {
            width: 100%;
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-wrapper-2 {
            justify-content: space-between;
            align-items: center;
            display: flex;
        }

        .hero-split-2 {
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            max-width: 46%;
            display: flex;
        }

        .margin-bottom-24px-2 {
            margin-bottom: 24px;
        }

        .button-primary-2 {
            color: #fff;
            letter-spacing: 2px;
            text-transform: uppercase;
            background-color: #1a1b1f;
            padding: 12px 25px;
            font-size: 12px;
            line-height: 20px;
            transition: all .2s;
        }

        .button-primary-2:hover {
            color: #fff;
            background-color: #32343a;
        }

        .button-primary-2:active {
            background-color: #43464d;
        }

        .shadow-two-2 {
            box-shadow: 0 4px 24px rgba(150, 163, 181, .08);
        }

        .rl_blogpost1_author-text-large {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blogpost1_details-wrapper {
            flex-direction: column;
            align-items: flex-start;
        }

        .rl_blogpost1_author-image {
            object-fit: cover;
            border-radius: 100%;
            width: 3.5rem;
            min-width: 3.5rem;
            height: 3.5rem;
            min-height: 3.5rem;
        }

        .rl_blogpost1_author-wrapper {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            align-items: center;
            display: flex;
        }

        .rl_blogpost1_spacing-block-8 {
            width: 100%;
            padding-bottom: 3rem;
        }

        .rl_blogpost1_divider {
            background-color: var(--relume-library-lite--rl-black);
            width: 100%;
            height: 1px;
        }

        .rl_blogpost1_spacing-block-7 {
            width: 100%;
            padding-bottom: 3rem;
        }

        .rl_blogpost1_tag-item {
            background-color: var(--relume-library-lite--rl-gray);
            color: var(--relume-library-lite--rl-black);
            padding: .25rem .5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.5;
            text-decoration: none;
        }

        .rl_blogpost1_tag-item.w--current {
            border-bottom: 2px solid #000;
        }

        .rl_blogpost1_tag-list {
            grid-column-gap: .5rem;
            grid-row-gap: .5rem;
            flex-wrap: wrap;
            justify-content: flex-end;
            align-items: stretch;
            display: flex;
        }

        .rl_blogpost1_tag-list-wrapper {
            width: 50%;
        }

        .rl_blogpost1_social-icon {
            width: 1.5rem;
            height: 1.5rem;
        }

        .rl_blogpost1_social-link {
            background-color: var(--relume-library-lite--rl-gray);
            color: var(--relume-library-lite--rl-black);
            border-radius: 20px;
            padding: .25rem;
        }

        .rl_blogpost1_share {
            grid-column-gap: .5rem;
            grid-row-gap: .5rem;
            grid-template-rows: auto;
            grid-template-columns: max-content;
            grid-auto-columns: 1fr;
            grid-auto-flow: column;
            justify-items: start;
            display: grid;
        }

        .rl_blogpost1_spacing-block-6 {
            width: 100%;
            padding-bottom: 1rem;
        }

        .rl-heading-style-h6 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.4;
        }

        .rl_blogpost1_share-wrapper {
            flex-direction: column;
            align-items: flex-start;
            width: 50%;
            display: flex;
        }

        .rl_blogpost1_content-bottom {
            justify-content: space-between;
            align-items: flex-end;
            display: flex;
        }

        .rl_blogpost1_spacing-block-5 {
            width: 100%;
            padding-bottom: 4rem;
        }

        .rl-text-rich-text {
            color: #000;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-weight: 400;
        }

        .rl_blogpost1_content {
            width: 100%;
            max-width: 48rem;
            margin-left: auto;
            margin-right: auto;
        }

        .rl_blogpost1_spacing-block-4 {
            width: 100%;
            padding-bottom: 4rem;
        }

        .rl_blogpost1_image {
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .rl_blogpost1_image-wrapper {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-top: 50%;
            position: relative;
            overflow: hidden;
        }

        .rl_blogpost1_spacing-block-3 {
            width: 100%;
            padding-bottom: 5rem;
        }

        .rl-text-style-small-3 {
            color: var(--relume-library-lite--rl-black);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .rl_blogpost1_text-divider {
            color: var(--relume-library-lite--rl-black);
            margin-left: .5rem;
            margin-right: .5rem;
        }

        .rl_blogpost1_date-wrapper {
            display: flex;
        }

        .rl_blogpost1_author-text {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .rl_blogpost1_content-top {
            justify-content: space-between;
            align-items: flex-end;
            width: 100%;
            display: flex;
        }

        .rl_blogpost1_spacing-block-2 {
            width: 100%;
            padding-bottom: 3rem;
        }

        .rl_blogpost1_spacing-block-1 {
            width: 100%;
            padding-bottom: 1.5rem;
        }

        .rl-breadcrumb-link-active {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            text-decoration: none;
        }

        .rl-breadcrumb-link-active.w--current {
            font-weight: 600;
        }

        .rl-breadcrumb-divider {
            color: #000;
            justify-content: center;
            align-items: center;
            width: 1rem;
            height: 1rem;
            display: flex;
        }

        .rl-breadcrumb-link {
            color: var(--relume-library-lite--rl-black);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-decoration: none;
        }

        .rl-breadcrumb-link.w--current {
            font-weight: 600;
        }

        .rl_blogpost1_breadcrumb {
            grid-column-gap: .5rem;
            grid-row-gap: .5rem;
            align-items: center;
            width: 100%;
            display: flex;
        }

        .rl_blogpost1_title-wrapper {
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            width: 100%;
            max-width: 48rem;
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }

        .rl_section_blogpost1 {
            background-color: var(--relume-library-lite--rl-white);
        }

        .error-text-2 {
            color: #e23939;
        }

        .error-message-2 {
            margin-top: 1.5rem;
            padding: .875rem 1rem;
        }

        .success-text-2 {
            font-weight: 600;
        }

        .success-message-2 {
            background-color: #f4f4f4;
            padding: 1.5rem;
        }

        .uui-text-style-link-2 {
            color: var(--untitled-ui--gray600);
            text-decoration: underline;
            transition: color .3s;
        }

        .uui-text-style-link-2:hover {
            color: var(--untitled-ui--gray700);
        }

        .uui-text-size-small-2 {
            color: var(--untitled-ui--gray600);
            letter-spacing: normal;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: .875rem;
            line-height: 1.5;
        }

        .uui-text-size-small-2.text-align-left {
            text-align: left;
        }

        .uui-button-2 {
            grid-column-gap: .5rem;
            border: 1px solid var(--untitled-ui--primary600);
            background-color: var(--untitled-ui--primary600);
            color: var(--untitled-ui--white);
            text-align: center;
            white-space: nowrap;
            border-radius: .5rem;
            justify-content: center;
            align-items: center;
            padding: .625rem 1.125rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            text-decoration: none;
            transition: all .3s;
            display: flex;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .05);
        }

        .uui-button-2:hover {
            border-color: var(--untitled-ui--primary700);
            background-color: var(--untitled-ui--primary700);
        }

        .uui-button-2:focus {
            background-color: var(--untitled-ui--primary600);
            box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05), 0 0 0 4px var(--untitled-ui--primary100);
        }

        .uui-form_input-3 {
            border: 1px solid var(--untitled-ui--gray300);
            background-color: var(--untitled-ui--white);
            color: var(--untitled-ui--gray900);
            border-radius: .5rem;
            height: auto;
            min-height: 2.75rem;
            margin-bottom: 0;
            padding: .5rem .875rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5;
            transition: all .3s;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .05);
        }

        .uui-form_input-3:focus {
            border-color: var(--untitled-ui--primary300);
            box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05), 0 0 0 4px var(--untitled-ui--primary100);
            color: var(--untitled-ui--gray900);
        }

        .uui-form_input-3::placeholder {
            color: var(--untitled-ui--gray500);
        }

        .uui-signup-form_wrapper {
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            grid-template-rows: auto;
            grid-template-columns: 1fr max-content;
            grid-auto-columns: 1fr;
            margin-bottom: .375rem;
            display: grid;
        }

        .uui-cta11_form {
            max-width: 30rem;
            margin: 2.5rem auto 0;
        }

        .uui-text-size-large-2 {
            color: var(--untitled-ui--gray600);
            letter-spacing: normal;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 1.125rem;
            line-height: 1.5;
        }

        .uui-space-xsmall-2 {
            width: 100%;
            min-height: 1rem;
        }

        .uui-heading-medium-2 {
            color: var(--untitled-ui--gray900);
            margin-top: 0;
            margin-bottom: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica Neue, Oxygen, Fira Sans, Droid Sans, sans-serif;
            font-size: 2.25rem;
            font-weight: 600;
            line-height: 1.3;
        }

        .uui-text-align-center-2 {
            text-align: center;
        }

        .uui-cta11_component {
            background-color: var(--untitled-ui--gray50);
            border-radius: 1rem;
            padding: 4rem;
        }

        .uui-padding-vertical-xhuge-2 {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .uui-container-large-2 {
            width: 100%;
            max-width: 80rem;
            margin-left: auto;
            margin-right: auto;
        }

        .uui-page-padding-3 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .uui-section_cta11 {
            background-color: var(--untitled-ui--white);
            position: relative;
        }

        .utility-page-wrap {
            justify-content: center;
            align-items: center;
            width: 100vw;
            max-width: 100%;
            height: 100vh;
            max-height: 100%;
            display: flex;
        }

        .utility-page-content {
            text-align: center;
            flex-direction: column;
            width: 260px;
            display: flex;
        }

        .utility-page-form {
            flex-direction: column;
            align-items: stretch;
            display: flex;
        }

        .team-slider-3 {
            background-color: #f5f7fa;
            border-bottom: 1px solid #e4ebf3;
            padding: 80px 30px;
            position: relative;
        }

        .container-6 {
            width: 100%;
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
        }

        .centered-heading-3 {
            text-align: center;
            margin-bottom: 16px;
        }

        .centered-subheading-3 {
            text-align: center;
            max-width: 530px;
            margin-left: auto;
            margin-right: auto;
        }

        .team-slider-wrapper-3 {
            background-color: rgba(0, 0, 0, 0);
            height: auto;
            margin-top: 50px;
        }

        .team-slide-wrapper-3 {
            width: 30%;
            margin-right: 5%;
        }

        .team-block-3 {
            background-color: #fff;
            padding-bottom: 24px;
        }

        .team-member-image-two-3 {
            margin-bottom: 18px;
        }

        .team-block-info-3 {
            flex-direction: column;
            align-items: flex-start;
            padding-left: 24px;
            padding-right: 24px;
            display: flex;
        }

        .team-member-name-two-3 {
            margin-bottom: 12px;
            font-weight: 600;
        }

        .team-member-text-3 {
            margin-bottom: 20px;
        }

        .text-link-arrow-3 {
            color: #1a1b1f;
            justify-content: flex-start;
            align-items: center;
            font-size: 14px;
            line-height: 20px;
            text-decoration: none;
            display: flex;
        }

        .arrow-embed-3 {
            margin-left: 2px;
            display: flex;
        }

        .team-slider-arrow-3 {
            display: none;
        }

        .team-slider-nav-3 {
            margin-top: 24px;
            font-size: 10px;
            position: static;
            bottom: -60px;
        }

        @media screen and (max-width: 991px) {
            .container {
                max-width: 728px;
            }

            .nav-menu-wrapper {
                background-color: rgba(0, 0, 0, 0);
            }

            .nav-menu-two {
                background-color: #fff;
                border-radius: 50px;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: center;
                margin-top: 10px;
                padding: 20px;
                display: flex;
                box-shadow: 0 8px 50px rgba(0, 0, 0, .05);
            }

            .nav-link {
                padding-left: 5px;
                padding-right: 5px;
            }

            .nav-dropdown-list.shadow-three.w--open {
                position: absolute;
            }

            .menu-button {
                padding: 12px;
            }

            .menu-button.w--open {
                color: #fff;
                background-color: #a6b1bf;
            }

            .hero-wrapper {
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
                margin-bottom: -40px;
            }

            .hero-split {
                max-width: 100%;
                margin-bottom: 40px;
            }

            .container-2 {
                max-width: 728px;
            }

            .team-slide-wrapper {
                width: 47%;
                margin-right: 6%;
            }

            .rl_blog8_list {
                grid-template-columns: 1fr 1fr;
            }

            .rl-heading-style-h4 {
                font-size: 1.75rem;
            }

            .rl_blog8_featured-item-content {
                padding: 2rem;
            }

            .rl_blog5_spacing-block-3 {
                padding-bottom: 4.5rem;
            }

            .rl-heading-style-h1 {
                font-size: 3.25rem;
            }

            .rl-padding-section-large {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .container-3 {
                max-width: 728px;
            }

            .team-slide-wrapper-2 {
                width: 47%;
                margin-right: 6%;
            }

            .combine-heading-style-h2 {
                font-size: 2.5rem;
            }

            .combine-padding-global {
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }

            .rl_testimonial17_testimonial-list {
                grid-template-columns: 1fr 1fr;
            }

            .rl_testimonial17_spacing-block-2 {
                padding-bottom: 4.5rem;
            }

            .rl-heading-style-h2 {
                font-size: 2.75rem;
            }

            .rl-padding-section-large-2 {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .rl_blog33_spacing-block-8 {
                padding-bottom: 3.5rem;
            }

            .rl_blog33_list {
                grid-template-columns: 1fr 1fr;
            }

            .rl_blog33_spacing-block-3 {
                padding-bottom: 4.5rem;
            }

            .rl-padding-section-large-3 {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .rl_blog44_spacing-block-7 {
                padding-bottom: 3.5rem;
            }

            .rl_blog44_button-row-mobile {
                flex: none;
            }

            .rl_blog44_list {
                grid-template-columns: 1fr 1fr;
            }

            .rl_blog44_spacing-block-3 {
                padding-bottom: 4.5rem;
            }

            .rl_blog44_button-row-desktop {
                flex: none;
            }

            .rl_blog44_heading {
                margin-right: 3rem;
            }

            .rl_blog44_heading-wrapper {
                grid-column-gap: 3rem;
            }

            .rl-padding-section-large-4 {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .uui-faq05_cta-button-row {
                flex: none;
                justify-content: flex-start;
            }

            .uui-faq05_cta-content {
                margin-right: 3rem;
            }

            .uui-faq05_cta {
                grid-column-gap: 3rem;
                grid-row-gap: 2rem;
                grid-template-columns: 1fr;
            }

            .uui-faq05_layout {
                grid-template-columns: 1fr 1fr;
            }

            .uui-padding-vertical-xhuge {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .container-4 {
                max-width: 728px;
            }

            .testimonial-slide {
                padding-left: 32px;
            }

            .testimonial-quote {
                overflow: visible;
            }

            .uui-footer05_social-icons {
                margin-bottom: 1rem;
            }

            .uui-footer05_bottom-wrapper {
                flex-direction: column-reverse;
                justify-content: flex-start;
                align-items: flex-start;
            }

            .uui-footer05_top-wrapper {
                grid-row-gap: 3rem;
                grid-template-columns: 1fr 1fr 1fr;
            }

            .uui-footer05_form-block {
                min-width: auto;
            }

            .uui-footer05_newsletter-text-wrapper {
                margin-bottom: 2rem;
            }

            .uui-footer05_newsletter-wrapper {
                justify-content: flex-start;
                display: block;
            }

            .uui-padding-vertical-xlarge {
                padding-top: 3.5rem;
                padding-bottom: 3.5rem;
            }

            .uui-footer04_top-wrapper {
                grid-row-gap: 2rem;
                grid-template-columns: 1fr;
                justify-content: center;
                justify-items: center;
            }

            .footer-content {
                grid-column-gap: 60px;
            }

            .rl_blog33_spacing-block-8-2 {
                padding-bottom: 3.5rem;
            }

            .rl_blog33_list-2 {
                grid-template-columns: 1fr 1fr;
            }

            .rl_blog33_spacing-block-3-2 {
                padding-bottom: 4.5rem;
            }

            .rl-heading-style-h2-2 {
                font-size: 2.75rem;
            }

            .rl-padding-section-large-5 {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .container-5 {
                max-width: 728px;
            }

            .hero-wrapper-2 {
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
                margin-bottom: -40px;
            }

            .hero-split-2 {
                max-width: 100%;
                margin-bottom: 40px;
            }

            .rl_blogpost1_spacing-block-8,
            .rl_blogpost1_spacing-block-7 {
                padding-bottom: 2.5rem;
            }

            .rl_blogpost1_spacing-block-5 {
                padding-bottom: 3.5rem;
            }

            .rl_blogpost1_content {
                margin-bottom: 3rem;
            }

            .rl_blogpost1_spacing-block-4 {
                padding-bottom: 3.5rem;
            }

            .rl_blogpost1_image-wrapper {
                padding-top: 56.25%;
            }

            .rl_blogpost1_spacing-block-3 {
                padding-bottom: 4.5rem;
            }

            .rl_blogpost1_spacing-block-2 {
                padding-bottom: 2.5rem;
            }

            .uui-cta11_component {
                padding: 3rem;
            }

            .uui-padding-vertical-xhuge-2 {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }

            .container-6 {
                max-width: 728px;
            }

            .team-slide-wrapper-3 {
                width: 47%;
                margin-right: 6%;
            }
        }

        @media screen and (max-width: 767px) {
            .navbar-logo-left-container {
                max-width: 100%;
            }

            .navbar-brand {
                padding-left: 0;
            }

            .nav-menu-two {
                border-radius: 20px;
                flex-direction: column;
                padding-bottom: 30px;
            }

            .nav-link {
                padding-top: 10px;
                padding-bottom: 10px;
                display: inline-block;
            }

            .nav-dropdown {
                flex-direction: column;
                align-items: center;
                display: flex;
            }

            .nav-dropdown-toggle {
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .nav-dropdown-list.shadow-three {
                box-shadow: 0 8px 50px rgba(0, 0, 0, .05);
            }

            .nav-dropdown-list.shadow-three.w--open {
                position: relative;
            }

            .nav-dropdown-list.shadow-three.mobile-shadow-hide {
                box-shadow: none;
            }

            .nav-divider {
                width: 200px;
                max-width: 100%;
                height: 1px;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .nav-link-accent {
                margin-right: 5px;
                padding-top: 10px;
                padding-bottom: 10px;
                display: inline-block;
            }

            .mobile-margin-top-10 {
                margin-top: 10px;
            }

            .traveler-home-maindiv,
            .team-slider {
                padding: 60px 15px;
            }

            .rl_blog8_spacing-block-11 {
                padding-bottom: 1.25rem;
            }

            .rl-heading-style-h5 {
                font-size: 1.25rem;
            }

            .rl_blog8_spacing-block-9 {
                padding-bottom: .75rem;
            }

            .rl_blog8_list {
                grid-row-gap: 3rem;
                grid-template-columns: 1fr;
            }

            .rl_blog8_spacing-block-8 {
                padding-bottom: 3rem;
            }

            .rl_blog8_menu-link.last-link {
                margin-right: 2rem;
            }

            .rl_blog8_category-menu {
                width: 100vw;
                margin-left: -5vw;
                padding-left: 5vw;
                overflow: scroll;
            }

            .rl_blog8_spacing-block-7 {
                padding-bottom: 3rem;
            }

            .rl_blog8_spacing-block-6 {
                padding-bottom: 1.25rem;
            }

            .rl_blog8_spacing-block-5 {
                padding-bottom: .75rem;
            }

            .rl-heading-style-h4 {
                font-size: 1.5rem;
                line-height: 1.4;
            }

            .rl_blog8_spacing-block-4 {
                padding-bottom: .75rem;
            }

            .rl_blog8_featured-item-content {
                padding: 1.5rem;
            }

            .rl_blog8_featured-item-wrapper {
                grid-row-gap: 0rem;
                grid-template-columns: 1fr;
            }

            .rl_blog5_spacing-block-3 {
                padding-bottom: 3rem;
            }

            .rl-text-style-medium {
                font-size: 1rem;
            }

            .rl_blog8_spacing-block-2 {
                padding-bottom: 1.25rem;
            }

            .rl-heading-style-h1 {
                font-size: 2.5rem;
            }

            .rl_blog8_spacing-block-1 {
                padding-bottom: .75rem;
            }

            .rl-padding-section-large {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .team-slider-2 {
                padding: 60px 15px;
            }

            .combine-clients4_grid {
                flex-direction: column;
                grid-template-columns: 1fr 1fr;
                display: flex;
            }

            .combine-padding-global {
                padding-left: 1.25rem;
                padding-right: 1.25rem;
            }

            .rl_testimonial17_customer {
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
            }

            .rl_testimonial17_spacing-block-4 {
                padding-bottom: 1.25rem;
            }

            .rl-text-style-medium-2 {
                font-size: 1rem;
            }

            .rl_testimonial17_testimonial {
                padding: 1.5rem;
            }

            .rl_testimonial17_testimonial-list {
                grid-template-columns: 1fr;
            }

            .rl_testimonial17_spacing-block-2 {
                padding-bottom: 3rem;
            }

            .rl_testimonial17_spacing-block-1 {
                padding-bottom: 1.25rem;
            }

            .rl-heading-style-h2 {
                font-size: 2.25rem;
            }

            .rl-padding-section-large-2 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .rl_blog33_spacing-block-8 {
                padding-bottom: 2.5rem;
            }

            .rl_blog33_spacing-block-7 {
                padding-bottom: 1.25rem;
            }

            .rl-heading-style-h5-2 {
                font-size: 1.25rem;
            }

            .rl_blog33_spacing-block-4 {
                padding-bottom: 1.25rem;
            }

            .rl_blog33_list {
                grid-row-gap: 3rem;
                grid-template-columns: 1fr;
            }

            .rl_blog33_spacing-block-3 {
                padding-bottom: 3rem;
            }

            .rl_blog33_spacing-block-2 {
                padding-bottom: 1.25rem;
            }

            .rl_blog33_spacing-block-1 {
                padding-bottom: .75rem;
            }

            .rl-padding-section-large-3 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .rl_blog44_spacing-block-7 {
                padding-bottom: 2.5rem;
            }

            .rl_blog44_button-row-mobile {
                justify-content: flex-start;
                width: 100%;
                display: flex;
            }

            .rl_blog44_spacing-block-6 {
                padding-bottom: 1.25rem;
            }

            .rl_blog44_spacing-block-4 {
                padding-bottom: .75rem;
            }

            .rl_blog44_list {
                grid-row-gap: 3rem;
                grid-template-columns: 1fr;
            }

            .rl_blog44_spacing-block-3 {
                padding-bottom: 3rem;
            }

            .rl_blog44_button-row-desktop {
                justify-content: flex-start;
                width: 100%;
                display: none;
            }

            .rl_blog44_spacing-block-2 {
                padding-bottom: 1.25rem;
            }

            .rl_blog44_spacing-block-1 {
                padding-bottom: .75rem;
            }

            .rl_blog44_heading {
                margin-right: 0;
            }

            .rl_blog44_heading-wrapper {
                grid-row-gap: 2rem;
                flex-direction: column;
                grid-template-columns: 1fr;
                justify-content: flex-start;
                align-items: flex-start;
            }

            .rl-padding-section-large-4 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .uui-button {
                font-size: 1rem;
            }

            .uui-button:hover {
                border-color: var(--untitled-ui--primary600);
                background-color: var(--untitled-ui--primary600);
            }

            .uui-faq05_cta-button-row {
                flex-flow: wrap-reverse;
                justify-content: flex-start;
                width: 100%;
            }

            .uui-text-size-large {
                font-size: 1rem;
            }

            .uui-heading-xxsmall {
                font-size: 1.125rem;
            }

            .uui-faq05_cta-content {
                margin-right: 0;
            }

            .uui-faq05_cta {
                flex-direction: column;
                margin-top: 3rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .uui-faq05_layout {
                grid-row-gap: 2.5rem;
                grid-template-columns: 1fr;
            }

            .uui-faq05_component {
                margin-top: 2rem;
            }

            .uui-space-xsmall {
                min-height: .75rem;
            }

            .uui-heading-medium {
                font-size: 1.75rem;
                line-height: 1.4;
            }

            .uui-padding-vertical-xhuge {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .uui-page-padding {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .testimonial-slider-large {
                padding: 60px 15px;
            }

            .testimonial-slide {
                flex-direction: column;
                padding: 23px;
            }

            .testimonial-content {
                max-width: none;
                margin-bottom: 40px;
                margin-right: 0;
            }

            .testimonial-quote-icon {
                width: 50px;
                margin-bottom: 16px;
            }

            .testimonial-image-two {
                width: 100%;
                height: auto;
            }

            .uui-footer05_social-link:hover,
            .uui-footer05_legal-link:hover {
                color: var(--untitled-ui--gray400);
            }

            .uui-footer05_legal-list {
                margin-bottom: 1rem;
            }

            .uui-footer05_legal-list-wrapper {
                flex-direction: column-reverse;
            }

            .uui-footer05_bottom-wrapper {
                flex-direction: column-reverse;
                align-items: flex-start;
                margin-top: 3rem;
            }

            .uui-footer05_link:hover {
                color: var(--untitled-ui--gray500);
            }

            .uui-badge-small-success {
                padding: .125rem .5rem;
            }

            .uui-styleguide_logomark-bg {
                background-image: url('../images/untitled-ui-logomark.svg');
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .uui-footer05_logo-link {
                margin-bottom: 1rem;
            }

            .uui-footer05_top-wrapper {
                grid-row-gap: 2rem;
            }

            .uui-footer05_newsletter-wrapper {
                flex-direction: column;
                align-items: flex-start;
                margin-bottom: 3rem;
            }

            .uui-padding-vertical-xlarge {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }

            .f-and-q-div {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .uui-contact02_component {
                margin-top: 3rem;
            }

            .uui-footer04_legal-link:hover {
                color: var(--untitled-ui--gray400);
            }

            .uui-footer04_legal-list {
                margin-bottom: 1rem;
            }

            .uui-footer04_bottom-wrapper {
                flex-direction: column-reverse;
                align-items: center;
                margin-top: 3rem;
            }

            .uui-footer04_social-link:hover {
                color: var(--untitled-ui--gray400);
            }

            .uui-footer04_link:hover {
                color: var(--untitled-ui--gray500);
            }

            .uui-footer04_link-list {
                grid-column-gap: 1rem;
                grid-row-gap: .5rem;
                grid-template-columns: 1fr 1fr 1fr;
                grid-auto-flow: row;
                justify-items: center;
            }

            .footer {
                padding-left: 15px;
                padding-right: 15px;
            }

            .footer-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .footer-content {
                grid-template-columns: 1fr;
                margin-top: 40px;
            }

            .footer-block {
                align-items: center;
            }

            .footer-link:hover {
                color: rgba(26, 27, 31, .75);
            }

            .footer-social-block {
                margin-top: 20px;
                margin-left: -20px;
            }

            .footer-social-link {
                margin-left: 20px;
            }

            .footer-divider {
                margin-top: 60px;
            }

            .rl_blog33_spacing-block-8-2 {
                padding-bottom: 2.5rem;
            }

            .rl_blog33_spacing-block-7-2 {
                padding-bottom: 1.25rem;
            }

            .rl-heading-style-h5-3 {
                font-size: 1.25rem;
            }

            .rl_blog33_spacing-block-4-2 {
                padding-bottom: 1.25rem;
            }

            .rl_blog33_list-2 {
                grid-row-gap: 3rem;
                grid-template-columns: 1fr;
            }

            .rl_blog33_spacing-block-3-2 {
                padding-bottom: 3rem;
            }

            .rl-text-style-medium-3 {
                font-size: 1rem;
            }

            .rl_blog33_spacing-block-2-2 {
                padding-bottom: 1.25rem;
            }

            .rl-heading-style-h2-2 {
                font-size: 2.25rem;
            }

            .rl_blog33_spacing-block-1-2 {
                padding-bottom: .75rem;
            }

            .rl-padding-section-large-5 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .hero-heading-left-2 {
                padding: 60px 15px;
            }

            .rl_blogpost1_author-text-large {
                font-size: 1rem;
            }

            .rl_blogpost1_spacing-block-8 {
                padding-bottom: 2rem;
            }

            .rl_blogpost1_divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }

            .rl_blogpost1_spacing-block-7 {
                padding-bottom: 2rem;
            }

            .rl_blogpost1_spacing-block-6 {
                padding-bottom: 1rem;
            }

            .rl-heading-style-h6 {
                font-size: 1.125rem;
            }

            .rl_blogpost1_spacing-block-5 {
                padding-bottom: 2.5rem;
            }

            .rl_blogpost1_content {
                margin-bottom: 2rem;
            }

            .rl_blogpost1_spacing-block-4 {
                padding-bottom: 2.5rem;
            }

            .rl_blogpost1_spacing-block-3 {
                padding-bottom: 3rem;
            }

            .rl_blogpost1_spacing-block-2 {
                padding-bottom: 2rem;
            }

            .rl_blogpost1_spacing-block-1 {
                padding-bottom: 1.25rem;
            }

            .uui-button-2 {
                font-size: 1rem;
            }

            .uui-button-2:hover {
                border-color: var(--untitled-ui--primary600);
                background-color: var(--untitled-ui--primary600);
            }

            .uui-cta11_form {
                margin-top: 2rem;
            }

            .uui-text-size-large-2 {
                font-size: 1rem;
            }

            .uui-space-xsmall-2 {
                min-height: .75rem;
            }

            .uui-heading-medium-2 {
                font-size: 1.75rem;
                line-height: 1.4;
            }

            .uui-cta11_component {
                padding: 2.5rem 1.5rem;
            }

            .uui-padding-vertical-xhuge-2 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            .uui-page-padding-3 {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .team-slider-3 {
                padding: 60px 15px;
            }
        }

        @media screen and (max-width: 479px) {
            .container {
                max-width: none;
            }

            .nav-menu-two {
                grid-column-gap: 16px;
                grid-row-gap: 16px;
                flex-direction: column;
                grid-template-rows: auto auto;
                grid-template-columns: 1fr 1fr;
                grid-auto-columns: 1fr;
                display: flex;
            }

            .container-2 {
                max-width: none;
            }

            .centered-heading {
                margin-bottom: 24px;
            }

            .team-slide-wrapper {
                width: 100%;
                margin-right: 0%;
            }

            .rl_blog8_item-content,
            .rl_blog8_featured-item-content {
                padding-left: 1.25rem;
                padding-right: 1.25rem;
            }

            .container-3 {
                max-width: none;
            }

            .centered-heading-2 {
                margin-bottom: 24px;
            }

            .team-slide-wrapper-2 {
                width: 100%;
                margin-right: 0%;
            }

            .combine-padding-global {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .articlse-divs-view {
                padding-left: 1.25rem;
                padding-right: 1.25rem;
            }

            .uui-faq05_layout {
                grid-template-columns: 1fr;
            }

            .container-4 {
                max-width: none;
            }

            .testimonial-quote-icon {
                width: 30px;
            }

            .testimonial-quote {
                font-size: 22px;
                line-height: 30px;
            }

            .testimonial-author-image-three {
                margin-right: 16px;
            }

            .uui-footer05_top-wrapper {
                grid-row-gap: 2rem;
                grid-template-columns: 1fr;
            }

            .uui-footer05_form {
                grid-row-gap: 12px;
                flex-direction: column;
                grid-template-columns: 1fr;
            }

            .form-radio-2col {
                grid-template-columns: 1fr;
            }

            .form-field-2col {
                grid-template-rows: auto auto;
                grid-template-columns: 1fr;
            }

            .uui-footer04_link-list {
                grid-template-columns: 1fr 1fr;
            }

            .container-5 {
                max-width: none;
            }

            .rl_blogpost1_author-wrapper {
                margin-bottom: 1rem;
            }

            .rl_blogpost1_tag-list {
                justify-content: flex-start;
            }

            .rl_blogpost1_tag-list-wrapper {
                width: 100%;
            }

            .rl_blogpost1_share-wrapper {
                width: 100%;
                margin-bottom: 2rem;
            }

            .rl_blogpost1_content-bottom,
            .rl_blogpost1_content-top {
                flex-direction: column;
                align-items: flex-start;
            }

            .uui-signup-form_wrapper {
                grid-row-gap: .75rem;
                flex-direction: column;
                grid-template-columns: 1fr;
            }

            .container-6 {
                max-width: none;
            }

            .centered-heading-3 {
                margin-bottom: 24px;
            }

            .team-slide-wrapper-3 {
                width: 100%;
                margin-right: 0%;
            }
        }

        #w-node-_44fe17a3-a770-05e4-cc3e-c06361f78df1-0b1736c9 {
            grid-area: span 1 / span 1 / span 1 / span 1;
        }

        #w-node-_44fe17a3-a770-05e4-cc3e-c06361f78df2-0b1736c9 {
            justify-self: center;
        }

        #w-node-db069c42-d113-ac5f-18f7-a64baf770151-0b1736c9,
        #w-node-db069c42-d113-ac5f-18f7-a64baf77015a-0b1736c9,
        #w-node-db069c42-d113-ac5f-18f7-a64baf770165-0b1736c9 {
            grid-area: span 1 / span 1 / span 1 / span 1;
        }
    </style>
</head>

<body>
    <main class="traveler-home-header-outdiv">
        <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-left-container shadow-three w-nav">
            <div class="container">
                <div class="traveler-header-innerdiv">
                    <a href="#" class="navbar-brand w-nav-brand"><img src="../views/assets/images/photo_5886244338797756839_x.jpg" loading="lazy" width="62" alt=""></a>
                    <ul role="list" class="nav-menu-two w-list-unstyled">
                        <li>
                            <a id="home-link" href="#" class="nav-link">HOME</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">HOSTS</a>
                        </li>
                        <li>
                            <a href="../views/article_cards.php" class="nav-link">BLOGS</a>
                            <a href="#" class="nav-link">New</a>
                        </li>

                    </ul>
                    <nav role="navigation" class="nav-menu-wrapper w-nav-menu">
                        <a href="#" class="nav-link-accent">Docs</a><img src="../views/assets/images/photo_5886244338797756837_x.jpg" loading="lazy" width="36" height="Auto" alt="person_icon" class="image link">
                    </nav>
                    <div class="menu-button w-nav-button">
                        <div class="w-icon-nav-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="traveler-home-maindiv">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-split">
                    <h1 class="traveler-home-maindiv-heading">Explore the world and gain new  families</h1>
                    <p class="traveler-home-maindiv-desc-p"><strong class="bold-text">Unlock your ideal hosting solution with just a click! </strong></p>
                    <a href="#" class="traveler-home-maindiv-button w-button">Get Started</a>
                </div>
                <div class="hero-split"><img src="../views/assets/images/photo_5886244338797756840_x.jpg" loading="lazy" width="457" alt="" class="traveler-home-maindiv-img"></div>
            </div>
        </div>
        <header id="blog-header-8" class="rl_section_blog8">
            <div class="rl-padding-global">
                <div class="rl-container-large"></div>
            </div>
        </header>
    </section>
    <section class="team-slider-2 w-clearfix"><img src="../views/assets/images/photo_5886244338797756836_x.jpg" loading="lazy" width="157" alt="">
        <h2 class="centered-heading-2">suggested hosts</h2>
        <a href="#" class="button w-button">See more</a>
        <div class="container-3"></div>
        
    </section>
    <section class="combine-section_clients4">
        <div class="combine-padding-global"></div>
    </section>
    <!--What People Say About Us-->
    <?php
    require_once('../models/HomeWebFeedback.php');
    $feedbackController = new Test;
    $feedback = $feedbackController->getFeedback();
    ?>

    <html>

    <head>
        <title>staySwap</title>
        <link rel="stylesheet" href="../views/assets/CSS/HomeFeedback.css">
        <style>
            /* Paste the provided CSS here */
            * {
                margin: 0;
                padding: 0;
            }

            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                top: -9999px;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }
        </style>
    </head>

    <body>
        <section class="rl_section_testimonial17">
            <div class="rl-padding-global-2">
                <div class="rl-container-large-2">
                    <div class="rl-padding-section-large-2">
                        <div class="rl_testimonial17_component">
                            <div class="rl_testimonial17_heading-wrapper">
                                <h2 class="combine-heading-style-h2">What People Say About Us</h2>
                                <div class="rl_testimonial17_spacing-block-1"></div>
                            </div>
                            <div class="rl_testimonial17_spacing-block-2"></div>
                            <div class="rl_testimonial17_testimonial-list">
                                <?php if (!empty($feedback)) : ?>
                                    <?php foreach ($feedback as $item) : ?>
                                        <div class="rl_testimonial17_testimonial">
                                            <div class="rate">
                                                <?php for ($i = 5; $i >= 1; $i--) : ?>
                                                    <input type="radio" id="star<?php echo $i; ?>" name="rate" value="<?php echo $i; ?>" <?php if ($i == $item['rate']) echo 'checked'; ?> />
                                                    <label for="star<?php echo $i; ?>" title="<?php echo $i; ?> stars" style="color: <?php echo ($i <= $item['rate']) ? '#ffc700' : '#ccc'; ?>"><?php echo $i; ?> stars</label>
                                                <?php endfor; ?>
                                            </div>
                                            <div class="rl_testimonial17_spacing-block-4"></div>
                                            <div class="rl-text-style-medium-2"><?php echo '"' . ucfirst($item['content']) . '"'; ?></div>
                                            <div class="rl_testimonial17_spacing-block-4"></div>
                                            <div class="rl_testimonial17_customer">
                                                <div class="rl_testimonial17_customer-image-wrapper">
                                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($item['profile_pic']); ?>" loading="lazy" alt="" class="rl_testimonial17_customer-image">
                                                </div>

                                                <div class="rl_testimonial17_customer-info">
                                                    <p class="rl_testimonial17_name-text"><?php echo ucfirst($item['name']); ?></p>
                                                    <p class="rl-text-style-regular-2"><?php echo ucfirst($item['profile_description']); ?></p>
                                                    <!-- Add position and company name here -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <p>No feedback available.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
    <section class="rl_section_blog33">
        <section class="rl_section_blog44">
            <div class="rl-padding-global-4">
                <div class="rl-container-large-2">
                    <div class="rl-padding-section-large-4">
                        <div class="rl_blog44_component">
                            <div class="rl_blog44_heading-wrapper">
                                <div class="rl_blog44_heading">
                                    <h2 class="rl-heading-style-h2">StaySwapers blogs</h2>
                                    <div class="rl_blog44_spacing-block-2"></div>
                                    <p class="rl-text-style-medium-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="rl_blog44_button-row-desktop">
                                    <a href="../views/add_article.php " class="articles-view-all-btn is-secondary w-button">Add Yours</a>
                                </div>
                            </div>
                            <div class="rl_blog44_spacing-block-3"></div>
                            <div class="rl_blog44_list-wrapper">
                                <div class="rl_blog44_list">
                                    <div class="rl_blog44_item">
                                        <a href="#" class="rl_blog44_item-link w-inline-block">
                                            <div class="rl_blog44_image-wrapper"><img srcset="../views/assets/images/img-farmers-green.png" loading="lazy" sizes="(max-width: 767px) 88vw, (max-width: 991px) 42vw, 28vw" src="images/pexels-skitterphoto-9210.jpg" alt="" class="article-div-view-img"></div>
                                            <div class="articlse-divs-view">
                                                <div class="rl_blog44_item-content-top">
                                                    <div class="rl_blog44_meta-wrapper">
                                                        <div class="rl_blog44_category">
                                                            <div class="rl_blog44_category-text">Category</div>
                                                        </div>
                                                        <div class="rl_blog44_read-time-text">5 min read</div>
                                                    </div>
                                                    <div class="rl_blog44_spacing-block-4"></div>
                                                    <div class="rl_blog44_spacing-block-5"></div>
                                                    <h3 class="rl-heading-style-h5-2">Best meal in someone&#x27;s house</h3>
                                                    <div class="rl-text-style-regular-2">The Best Homestay Meals I&#x27;ve Ever Had: Recipes and Stories from Travelers</div>
                                                </div>
                                                <div class="rl_blog44_spacing-block-6"></div>
                                                <div class="rl-button-link-2">
                                                    <div class="rl-button-link-text-2">Read more</div>
                                                    <div class="rl-button-link-icon-2 w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rl_blog44_item">
                                        <a href="#" class="rl_blog44_item-link w-inline-block">
                                            <div class="rl_blog44_image-wrapper"><img srcset="../views/assets/images/pexels-skitterphoto-9210.jpg" loading="lazy" sizes="(max-width: 767px) 88vw, (max-width: 991px) 42vw, 28vw" src="images/pexels-imagescosy-17596578.jpg" alt="" class="article-div-view-img"></div>
                                            <div class="articlse-divs-view">
                                                <div class="rl_blog44_item-content-top">
                                                    <div class="rl_blog44_meta-wrapper">
                                                        <div class="rl_blog44_category">
                                                            <div class="rl_blog44_category-text">top10</div>
                                                        </div>
                                                        <div class="rl_blog44_read-time-text">5 min read</div>
                                                    </div>
                                                    <div class="rl_blog44_spacing-block-4"></div>
                                                    <div class="rl_blog44_spacing-block-5"></div>
                                                    <h3 class="rl-heading-style-h5-2">Staying in a Homestay vs. a Hotel</h3>
                                                    <div class="rl-text-style-regular-2">How to Create a Welcoming Environment for Homestay Guests</div>
                                                </div>
                                                <div class="rl_blog44_spacing-block-6"></div>
                                                <div class="rl-button-link-2">
                                                    <div class="rl-button-link-text-2">Read more</div>
                                                    <div class="rl-button-link-icon-2 w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rl_blog44_item">
                                        <a href="#" class="rl_blog44_item-link w-inline-block">
                                            <div class="rl_blog44_image-wrapper"><img srcset="../views/assets/images/pexels-rednguyen-15595768.jpg" alt="" class="article-div-view-img"></div>
                                            <div class="articlse-divs-view">
                                                <div class="rl_blog44_item-content-top">
                                                    <div class="rl_blog44_meta-wrapper">
                                                        <div class="rl_blog44_category">
                                                            <div class="rl_blog44_category-text">Category</div>
                                                        </div>
                                                        <div class="rl_blog44_read-time-text">7 min read</div>
                                                    </div>
                                                    <div class="rl_blog44_spacing-block-4"></div>
                                                    <div class="rl_blog44_spacing-block-5"></div>
                                                    <h3 class="rl-heading-style-h5-2">Exploring [City] Like a Local</h3>
                                                    <div class="rl-text-style-regular-2">Insider Tips from Your Homestay Host</div>
                                                </div>
                                                <div class="rl_blog44_spacing-block-6"></div>
                                                <div class="rl-button-link-2">
                                                    <div class="rl-button-link-text-2">Read more</div>
                                                    <div class="rl-button-link-icon-2 w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="rl_blog44_button-row-mobile">
                                <div class="rl_blog44_spacing-block-7"></div>
                                <a href="#" class="articles-view-all-btn is-secondary w-button">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="uui-section_faq05">
        <div class="uui-page-padding">
            <div class="uui-container-large"></div>
            <section class="testimonial-slider-large">
                <div class="container-4"></div>
                <div class="rl-padding-global-5">
                    <div class="rl-container-large-3">
                        <div class="rl-padding-section-large-5">
                            <div class="rl_blog33_component-2">
                                <div class="rl_blog33_heading-wrapper-2">
                                    <div class="rl_blog33_spacing-block-2-2"></div>
                                </div>
                                <div class="rl_blog33_list-wrapper-2">
                                    <div class="rl_blog33_list-2">
                                        <div class="rl_blog33_item-2">
                                            <a href="#" class="rl_blog33_image-link-2 w-inline-block">
                                                <div class="rl_blog33_image-wrapper-2"><img src="images/placeholder-image.svg" loading="lazy" alt="" class="rl_blog33_image-2"></div>
                                            </a>
                                            <div class="rl_blog33_spacing-block-4-2"></div>
                                            <div class="rl_blog33_spacing-block-5-2"></div>
                                            <div class="rl_blog33_author-text-2">Full name</div>
                                            <div class="rl_blog33_spacing-block-6-2"></div>
                                            <div class="rl-text-style-regular-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</div>
                                            <div class="rl_blog33_author-wrapper-2">
                                                <div class="rl_blog33_details-wrapper-2">
                                                    <div class="rl_blog33_date-wrapper-2">
                                                        <div class="rl-text-style-small-2">city</div>
                                                        <div class="rl_blog33_text-divider-2">•</div>
                                                        <div class="rl-text-style-small-2">country</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rl_blog33_item-2">
                                            <a href="#" class="rl_blog33_image-link-2 w-inline-block">
                                                <div class="rl_blog33_image-wrapper-2"></div>
                                            </a>
                                            <div class="rl_blog33_spacing-block-4-2"></div>
                                            <div class="rl_blog33_spacing-block-5-2"></div>
                                            <div class="rl_blog33_spacing-block-6-2"></div>
                                            <div class="rl_blog33_spacing-block-7-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rl_blog33_spacing-block-8-2"></div>
                                <a href="#" class="rl-button is-secondary w-button">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <footer class="uui-footer05_component">
        <div class="f-and-q-div">
            <div class="uui-container-large"></div>
        </div>
    </footer>
    <section class="uui-section_faq05">
        <div class="f-and-q-div">
            <div class="uui-container-large">
                <div class="uui-padding-vertical-xhuge">
                    <div class="uui-max-width-large">
                        <div class="uui-heading-subheading">Support</div>
                        <h2 class="uui-heading-medium">FAQs</h2>
                        <div class="uui-space-xsmall"></div>
                        <div class="uui-text-size-large">Everything you need to know about the product and billing. Can’t find the answer you’re looking for? Please <a href="#" class="uui-text-style-link">chat to our friendly team</a>.</div>
                    </div>
                    <div class="uui-faq05_component">
                        <div class="w-layout-grid uui-faq05_layout">
                            <div class="uui-faq05_item">
                                <div class="uui-heading-tiny">Is there a free trial available?</div>
                                <div class="uui-space-xxsmall"></div>
                                <div class="uui-text-size-medium">Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</div>
                            </div>
                            <div class="uui-faq05_item">
                                <div class="uui-heading-tiny">Can I change my plan later?</div>
                                <div class="uui-space-xxsmall"></div>
                                <div class="uui-text-size-medium">Of course. Our pricing scales with your company. Chat to our friendly team to find a solution that works for you.</div>
                            </div>
                            <div class="uui-faq05_item">
                                <div class="uui-heading-tiny">What is your cancellation policy?</div>
                                <div class="uui-space-xxsmall"></div>
                                <div class="uui-text-size-medium">We understand that things change. You can cancel your plan at any time and we’ll refund you the difference already paid.</div>
                            </div>
                            <div class="uui-faq05_item">
                                <div class="uui-heading-tiny">Can other info be added to an invoice?</div>
                                <div class="uui-space-xxsmall"></div>
                                <div class="uui-text-size-medium">At the moment, the only way to add additional information to invoices is to add the information to the workspace&#x27;s name.</div>
                            </div>
                            <div class="uui-faq05_item">
                                <div class="uui-heading-tiny">How does billing work?</div>
                                <div class="uui-space-xxsmall"></div>
                                <div class="uui-text-size-medium">Plans are per workspace, not per account. You can upgrade one workspace, and still have any number of free workspaces.</div>
                            </div>
                            <div class="uui-faq05_item">
                                <div class="uui-heading-tiny">How do I change my account email?</div>
                                <div class="uui-space-xxsmall"></div>
                                <div class="uui-text-size-medium">You can change the email address associated with your account by going to untitled.com/account from a laptop or desktop.</div>
                            </div>
                        </div>
                        <div class="uui-faq05_cta">
                            <div class="uui-faq05_cta-content">
                                <div class="uui-max-width-large">
                                    <h4 class="uui-heading-xxsmall">Still have questions?</h4>
                                    <div class="uui-space-xxsmall"></div>
                                    <div class="uui-text-size-large">Can’t find the answer you’re looking for? Please chat to our friendly team.</div>
                                </div>
                            </div>
                            <div class="uui-faq05_cta-button-row">
                                <a href="../views/WebFeedback.php" class="uui-button w-inline-block">
                                    <div>Get in touch</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container-4">
            <div class="footer-wrapper">
                <a href="#" class="footer-brand w-inline-block"><img src="../views/assets/images/photo_5886244338797756838_x.jpg" loading="lazy" width="164" alt=""></a>
                <div class="footer-content">
                    <div id="w-node-db069c42-d113-ac5f-18f7-a64baf770151-0b1736c9" class="footer-block">
                        <div class="title-small">Company</div>
                        <a href="#" class="footer-link">How it works</a>
                        <a href="#" class="footer-link">Pricing</a>
                        <a href="#" class="footer-link">Docs</a>
                    </div>
                    <div id="w-node-db069c42-d113-ac5f-18f7-a64baf77015a-0b1736c9" class="footer-block">
                        <div class="title-small">Resources</div>
                        <a href="#" class="footer-link">Blog post name list goes here</a>
                        <a href="#" class="footer-link">Blog post name list goes here</a>
                        <a href="#" class="footer-link">Blog post name list goes here</a>
                        <a href="#" class="footer-link">See all resources &gt;</a>
                    </div>
                    <div id="w-node-db069c42-d113-ac5f-18f7-a64baf770165-0b1736c9" class="footer-block">
                        <div class="title-small">About</div>
                        <a href="#" class="footer-link">Terms &amp; Conditions</a>
                        <a href="#" class="footer-link">Privacy policy</a>
                        <div class="footer-social-block">
                            <a href="#" class="footer-social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124ac15112aad5_twitter%20small.svg" loading="lazy" alt=""></a>
                            <a href="#" class="footer-social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a389912aad8_linkedin%20small.svg" loading="lazy" alt=""></a>
                            <a href="#" class="footer-social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a51bf12aae9_facebook%20small.svg" loading="lazy" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-divider"></div>
        <div class="footer-copyright-center">Copyright © 2024 StaySwap</div>
    </section>

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66296def0f62137f0b1736c3" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>