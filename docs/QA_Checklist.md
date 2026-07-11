# Digital Wellness Platform — QA Checklist

**Course:** CSC 4370/6370 Web Programming  
**Project Lead:** Darin Ward  
**Team Member:** Koffi Djokoe  

## General Site Testing

- [x] All six pages load without PHP errors.
- [x] Shared header appears on every page.
- [x] Shared navigation appears on every page.
- [x] Shared footer appears on every page.
- [x] Active navigation link matches the current page.
- [x] No broken internal navigation links were found.
- [x] No front-end JavaScript files or script tags are used.
- [x] Crimson design system is consistent across all pages.

## Homepage Testing

- [x] Hero buttons open the correct pages.
- [x] Feature cards link to the correct features.
- [x] Statistics section displays correctly.
- [x] Call-to-action buttons work.
- [x] Desktop hero displays in two columns.
- [x] Mobile hero stacks into one column.

## Resource Directory Testing

- [x] PHP resource array loads correctly.
- [x] All resources are rendered using `foreach`.
- [x] Six resource cards appear.
- [x] External links open in a new tab.
- [x] External links use `noopener noreferrer`.
- [x] Crisis-support notice is clearly visible.
- [x] Resource layout changes across mobile, tablet, and desktop.

## Mood Journal Testing

- [x] Submitting an empty form displays validation errors.
- [x] Invalid mood values are rejected.
- [x] Reflections shorter than 10 characters are rejected.
- [x] Reflections longer than 500 characters are rejected.
- [x] Valid submissions display a success message.
- [x] Mood data is stored in `$_SESSION`.
- [x] Saved mood, date, and reflection appear in the summary.
- [x] User output is sanitized with `htmlspecialchars()`.
- [x] Form controls can be reached with the keyboard.

## Self-Care Testing

- [x] All five self-care checkboxes work.
- [x] Checked activities display a checkmark.
- [x] Checked activities display a line-through state.
- [x] Each completed activity fills one progress segment.
- [x] All five segments fill when all activities are checked.
- [x] Affirmation controls switch between all three messages.
- [x] Affirmation interaction works without JavaScript.
- [x] Keyboard focus remains visible.

## Guided Breathing Testing

- [x] Breathing circle expands and contracts correctly.
- [x] Animation uses CSS `@keyframes`.
- [x] Daily wellness tip is selected from a PHP array.
- [x] Current date displays correctly.
- [x] Reduced-motion preferences are supported.
- [x] Breathing layout stacks correctly on smaller screens.

## About Page Testing

- [x] Project mission is clearly explained.
- [x] Target audience is clearly identified.
- [x] Project features are accurately described.
- [x] Technology list matches the actual implementation.
- [x] Accessibility section reflects the actual site.
- [x] Team roles are accurately listed.
- [x] About-page cards respond correctly across screen sizes.

## Accessibility Testing

- [x] Skip-to-content link works.
- [x] Semantic HTML landmarks are used.
- [x] Heading hierarchy is understandable.
- [x] All form controls have visible labels.
- [x] Keyboard focus indicators are visible.
- [x] Text remains readable against its background.
- [x] Reduced-motion support is included.
- [x] Links can be identified without relying only on color.

## Responsive Testing

### Mobile — Below 768px

- [x] Content displays in one column where appropriate.
- [x] Navigation wraps without horizontal scrolling.
- [x] Buttons remain readable and usable.
- [x] Forms fit within the viewport.
- [x] Cards stack correctly.
- [x] Footer sections stack correctly.

### Tablet — 768px and Above

- [x] Resource cards display in two columns.
- [x] Statistics display in two columns.
- [x] About-page cards display in two columns.
- [x] Navigation remains readable.

### Desktop — 1200px and Above

- [x] Resource cards display in three columns.
- [x] Homepage hero displays in two columns.
- [x] Mood journal displays beside its summary.
- [x] Self-care content displays in two columns.
- [x] Guided breathing content displays beside the daily tip.
- [x] Statistics display in four columns.

## Final Package Review

- [x] Planning proposal is included.
- [x] README is complete.
- [x] AI usage disclosure is included in the README.
- [x] QA checklist is included.
- [x] Progress log is included.
- [x] GitHub history contains meaningful commits.
- [x] Both team members are identified.
- [x] Repository and folder names follow the required convention.