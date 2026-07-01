The WordPress Block Patterns Resource List
Photo by Rob Pumphrey on Unsplash
Introduced to WordPress writers, theme developers and implementers in WordPress 5.5 release, Block Patterns, tested in the Gutenberg plugins since its 7.7 version, came to all WordPress sites. They open the door to be creative with blocks and make creative layouts available for content creators and site editors without using more than the core blocks.

Here is your resource list to explore creating small or big block patterns and how to make them available in your themes or plugins.

This post has been updated on Nov. 8, 2020 with the recent Block Pattern Directory discussion and links. And then it was again updates on February 16, 2021 with video for content creators on how to use the Block Patterns on their sites and with a discussion on Block Patterns for Full-Site Editing Query block. Latest update June 23, 2021 with information on the Pattern Directory, and submissions.

Updated: September 6th, 2021 with Video by Anne McCarthy which gives you “a look at the power of patterns, where you can currently find them, how you can start creating your own, and what’s to come in future releases”.


Table of Contents
Patterns Directory on WordPress.org
How to submit patterns for consideration for the Pattern Directory?
Other Directories
WordPress Block Patterns Change the Future of Page Building
How to use Block Patterns in your content?
From Zero to Hero: How to Create Block Patterns
Block Patterns in the Wild
How to Create Block Patterns if you are not a Developer?
Convert your Reusable Blocks to Block Patterns
Themes using Block Patterns
Seedlet
Inclusive
Cordero
Full-Site Editing, Block Patterns and Query Block
Official Documentation
End User Documentation
Developer Documentation
Theme Review Team
Changelog
Featured Image: Photo by Rob Pumphrey on Unsplash

Patterns Directory on WordPress.org
Updated June 23, 2021:

Over 80 Patterns are now in the Pattern Directory

Update: Initial Patterns for the Patterns Directory: After the initial push for community contributions to the Pattern Directory, the design team published a few suggestions for further submissions.

How to submit patterns for consideration for the Pattern Directory?
This is from the post on the initial pattern post Jun 8th, 2021: “We encourage you to submit pattern candidates (in the form of mockups and/or block markup) using the “[Type] Pattern Submission” tag in the Pattern Directory’s GitHub repository. There’s an issue template already created to help you get started. “

List of submissions on GitHub


Screenshot: Pattern Directory on WordPress.org
Late in October of last year, Alex Shiels kicked of the work on a Block Pattern Directory ideas and discussion.

In December, the meta team started the work. You can follow along on the GitHub repository and its project board for the initial version. Similar to the Block-directory, there are a few moving pieces that need to fit together:

The website of the Pattern Directory for WordPress.org, similar to on the plugin and themes directories.
Pattern Directory support in the core editor so users can search and insert block patterns directory from the inserter, similar to the block directory, without the installation steps. Patterns probably can be directly added to the post or page from the directory.
Pattern Submission Tool – based on the editor with sidebar controls and metadata entry. This will include a validation and curation step before the submitted pattern is published. You can also follow along the first designs by Michael Arestad. This is probably the most exciting part of the new directory as it will accommodate the community’s creativity.
Pattern Directory API for the backend of the site
REST-API end-point, and
new Pattern CPT permissions for creation and editing
Other Directories
WordPress.com released about 100 Block Patterns on their site. Justin Tadlock wrote about it and opinionated that the WordPress self-hosted community should follow the design. For the self-hosted ecosystem, quite a few template collections are available already.

The site Shareablock by Jeffrey Carandang allows community members to upload their favorite block patterns and share with the world.

The GutenbergHub Templates Library by Munir Kamal holds quite a few designs content creators can use via the Editor Plus plugin.

The plugin Redux Framework also comes with thousands of templates for the Gutenberg Editor.

Various Block Collections also provide a few block patterns and templates. GoDaddy Go theme, the Twenty-Twenty-One default theme, Genesis Blocks (former Atomic Blocks) are just examples of the wide variety already available.

top﻿

WordPress Block Patterns Change the Future of Page Building
Justin Tadlock, author, theme developer and writer at the WPTavern, wrote about the vision of block patterns in his article Block Patterns Will Change Everything. “From the average user’s point of view, block patterns are predefined sections they can use to create layouts. These layouts can be something as simple as the book section from earlier in this article to the more complex pricing columns. With these patterns available, users will be able to create complex layouts at the click of a butto,” and later, “The user sees something they want to use. They click on that pattern. It gets inserted into the post.”

Rich Tabor, now senior product manager, WordPress Experience at GoDaddy, was one of the first theme developers to build blocks; he eventually sold his plugin Co-Blocks and Theme shop to GoDaddy. From his personal blog article “Gutenberg Block Patterns: The Future of Page Building in WordPress”, Rich Tabor views WordPress block patterns in the context of proprietary web builders like Wix & Squarespace and how WordPress theme developers are now empowered to create similar page layout sections with Block Patterns.

“The idea around patterns is that themes and plugins may easily add beautiful pre-built block “sections” to the editor. So instead of having to add each block of a complex layout one by one, you’ll have direct access to any available patterns within the Block Library. “

Rich Tabor “Gutenberg Block Patterns: The Future of Page Building in WordPress”
In her talk at the WPBlockTalk conference, Mel Choyce-Dwan, product designer at Automattic and WordPress contributor, gave an overview of all the blocks available within the block editor, and then she shows you how to take those primary building blocks and combine them to creative and unique layouts. It will feed your imagination.

top﻿

How to use Block Patterns in your content?
On Learn.WordPress.org, part two of the series Introduction to publishing with the Block editor, you can learn how to use the block patterns on your website.


Learn.WordPress.org: Introduction to block patterns
The meetup space of Learn . WordPress team holds regular discussion groups on various WordPress subjects in connection with the workshops. There are new workshops published every week.

top﻿

From Zero to Hero: How to Create Block Patterns

Mel also published a step-by-step tutorial on how to create a simple block pattern, “from Zero to Hero style.” This should get you started in no time.

On the ThemeShaper blog, Mel Choyce-Dwan also published “Adding Block Patterns to Your Theme.”


Rich Tabor published an in-depth tutorial on “How to Build Block Patterns for the WordPress Block Editor.” He also invented a new verb “blocking a pattern.” 😁

Caroline Nymark is a long-time contributor on the WordPress Themes team and instructor on fullsiteediting.com. In her course, she teaches how to build block-based themes for WordPress. The course is free until January 2021. Two of the lessons are about Block Patterns. Introduction to block patterns goes over all the details of the register_block_pattern function, including making them translation ready and tips for styling. In Block patterns tips and resources, Carolina shares debugging tips as well as themes with block patterns, plugins and example code.

Eileen Violini, contributor on the core-editor, design and theme teams, covered Block Patterns as part of her “Theme of the Future” presentation at WordCamp Kent 2020 (recording on WordPress.tv)

Erik Karkovack, in his post How to Create a Simple Gutenberg Block Pattern in WordPress, walks you through the process of creating an elaborate block pattern, almost a page template, with cover image, columns, separator and paragraph.

WordPress Block Patterns: The Ultimate Guide by Kristin Wright of iThemes covers a lot of ground about Block Patterns, how to create them and how to use them

top﻿

Block Patterns in the Wild
After the release of Block Patterns and the new Block Directory in WordPress 5.5, Justin Tadlock reviews some block patterns available in his post: “Exploring the First Block Patterns to Land in the WordPress Theme Directory.”

Munir Kamal started a Template library at Gutenberg Hub. You can browse hundreds of templates, and when you find one you like, copy/paste the code and CSS, and you can import it to your site, thanks to the plugin Editor Plus. Justin Tadlock introduces it in his article: Gutenberg Hub Launches Online Block Template Builder.


Screenshot: Gutenberg Hub Tempate Directory
On Jeffrey Carandang’s “Share-a-Block” site, folks around the community share also their Block Patterns – at the moment 27 total for download. Find interesting Call to Actions, Feature list, profile sections or interesting Hero blocks variations. A download link will be sent to your email, together with a link to the instructions on how to add it to your site. TL;DR. You will need the EditorsKit plugin.


Screenshot: Share-a-Block / Block Patterns
Dōvy Paukstys offer support for Block Patterns in hiss Redux –Framework with thousands of page templates and layouts for Gutenberg


top﻿

How to Create Block Patterns if you are not a Developer?
Justin Tadlock channeled his enthusiasm for the Block Patterns in a plugin he introduced in his article: Create Custom Patterns with the Block Pattern Builder Plugin. In short, a site owner can create reusable patterns with this plugin and make them available for the editors on the site, without touching any code. “Once you publish a pattern, it will be available within the pattern library,” Justin wrote in the plugin description.

Mac Gyvercy, developer at Artbees, showed in his article “Gutenberg Block Patterns: Next Awesome Gutenberg Feature” a slightly different variation on how to create your block patterns. He suggested using the Code Snippets plugin to immediately add it to the site.

Benny Vluggen published a plugin for creating Block Patterns without code: the “Block Pattern Builder” by Blockmeister, which adds a menu item “Add to Block Patterns” to the “More Options” menu in the Block Toolbar. It also provides a separate WP Admin screen for Block Patterns, so you can edit them and add categories. Features I would love to see considered for the Gutenberg plugins and later in Core.




Screenshots: Block Patterns Builder by Blockmeister
(To navigate through the gallery, click on the images for a slider)
GoDaddy just released Co-Blocks 2.3.0. Plugin. “We sought to make the process of creating and reusing design patterns across a website simple without the need to write any code. This is our solution: Build out a section with blocks with all the fine details, select the blocks, and click “Add Design Pattern” to save.” posted JR Tashjian, Software Engineer at GoDaddy. You’ll be able to use it via the Inserter or export them to a new site.

Convert your Reusable Blocks to Block Patterns
JB Audras, WordPress core contributor and developer at Whodunit, created a plugin to convert Reusable Blocks to Block Patterns.

Reusable Blocks, a feature built into WordPress since December 2018, allows you to store reusable content like a call to action, or a disclaimer of some sort, and place it on multiple pages. When you edit the content of the reusable block change the content, every page that included it is automatically updated as well. It was used by many content creators as a quasi-template that they converted to a regular block before using it in a new post.

JB’s plugin extends that functionality with better management screens and a live preview; it also allows you to convert Reusable Blocks to native Block Patterns. It decouples the content from the presentation. Sarah Gooding in her article “Convert Reusable Blocks to Block Patterns with 1-Click” wrote about it at the WPTavern.

top﻿

Themes using Block Patterns
Seedlet was reviewed by Justin Tadlock 👋 at the WP Tavern. The other two themes, I found in the repository using the “Block Patterns” as keyword.

There might be others in the repository. Email me with the link and I include them pauli@gutenbergtimes.com

Seedlet
By Automattic in WordPress Theme Repository
Announcement post: Seedlet: A New, Sophisticated Theme Fully Powered By the Block Editor
Review: Exploring Seedlet, Automattic’s Block-First WordPress Theme (WPTavern)


Inclusive
By Carolina Nymark in WordPress Themes Repository

Inclusive is Carolina latest free theme. It is a fast, responsive and accessibility-ready theme with full support for the block editor. Also, available on GitHub



Recently, I switched my personal blog to the Inclusive theme and I enjoy working with it. Carolina also made great use of Block Styles for various core blocks.

Cordero
By Uxl in WordPress Themes Repository



Justin Tadlock explored the idea that maybe block patterns could be the best way to approach to replace widgets. Block areas will replace Widget areas and normal blocks and block patterns can be added to any section of a website. “Addressing the Theme Design Problem With Gutenberg’s New Block-Based Widgets System” I can’t wait for Gutenberg 9.0 to be released with the updated design for the Widget Screen and bug fixes.

top﻿

Full-Site Editing, Block Patterns and Query Block
In a recent pull request, the Gutenberg team explores how to use block patterns to give user meaningful choices for display of a post grid for their Site editors. The Query block itself might not be meant for End users, but Theme developers can offer great platters for the design.



Check out the full discussion on this PR.

top﻿

Official Documentation
End User Documentation
On Learn.WordPress the training team published a short workshop “Introduction to Block Patterns.”

The WordPress.org Documentation team published “Block Patterns” — how to use block patterns for content creators.

Developer Documentation
On their Block Patterns page in the documentation for the Block API, the Gutenberg team published the bare-bones code examples. You can look up the syntax on how to register block patterns, how to unregister them, how to register and unregister Block Pattern Categories.

In the release notes for WordPress 5.5 Riad Benguella, lead developer for Gutenberg, also mentions how to remove the core-block patterns and replace them with your themes or plugins page and section layouts.

Theme Review Team
“When using the register_block_pattern_category function, the first argument, the slug or name of the category, needs to be prefixed. Otherwise the category may be overwritten by plugins.”

September 8, 2020 meeting notes by Carolina Nymark
This as already been update in the prefix requirement section of the Theme Review process. If you are new to theme development, I recommend this post by Justin Tadlock Prefix all the things.

Reminders:

The label for the category must use a translation function.
Registering a custom category for block patterns is optional.
Do you have more questions? Did you build awesome block patterns yourself? Share them in a comment or email me to pauli@gutenbergtimes.com

top﻿

Changelog
February 16, 2021: Added section “How to use Block Patterns on your Website” with the video by Learn.WordPress team. Added section: “Full-Site Editing, Block Patterns and Query Block”. Added top links to each section.

October 21st, 2020: Added a link to the iThemes Ultimate Guide to Block Patterns and to Redux, a plugin providing many page layouts and patterns.

Published September 6, 2021
By Birgit Pauli-Haack
Posted in DIY Site Owners, For Developers, For Users, News, Themes
Photo by Nick Nice on Unsplash
Standardization for theme.json, Blocks without Build process, Patterns – Weekend Edition #183
