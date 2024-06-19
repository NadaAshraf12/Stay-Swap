<?php
require_once('../models/HomeFeedback.php');
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
                                                <img src="data:image/jpeg;base64,<?php echo base64_encode($item['cover_pic']); ?>" loading="lazy" alt="" class="rl_testimonial17_customer-image">
                                            </div>

                                            <div class="rl_testimonial17_customer-info">
                                                <p class="rl_testimonial17_name-text"><?php echo ucfirst($item['name']); ?></p>
                                                <p class="rl-text-style-regular-2"><?php echo ucfirst($item['bio']); ?></p>
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