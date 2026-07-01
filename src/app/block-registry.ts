/**
 * WordPress Block Pattern Registry
 *
 * Mirrors register_block_pattern() / register_block_pattern_category()
 * from the WordPress Block API. Each entry maps directly to the
 * pattern namespace, category, and template-part area conventions
 * used by the Gutenberg block editor.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/
 */

// ── Pattern Categories ────────────────────────────────────────────────────────
// Equivalent to register_block_pattern_category()
export const patternCategories = [
  { slug: "header",       label: "Headers" },
  { slug: "footer",       label: "Footers" },
  { slug: "banner",       label: "Banners" },
  { slug: "blog",         label: "Blog" },
  { slug: "query",        label: "Query" },
  { slug: "portfolio",    label: "Portfolio" },
  { slug: "call-to-action", label: "Call to Action" },
  { slug: "featured",     label: "Featured" },
  { slug: "text",         label: "Text" },
  { slug: "media",        label: "Media" },
  { slug: "woocommerce",  label: "WooCommerce" },
] as const;

export type PatternCategory = (typeof patternCategories)[number]["slug"];

// ── Template Part Areas ───────────────────────────────────────────────────────
// Maps React components → WordPress template-part areas
export const templateParts = [
  { name: "header",  area: "header",  component: "SiteHeader"  },
  { name: "footer",  area: "footer",  component: "SiteFooter"  },
] as const;

// ── Full-Page Templates ───────────────────────────────────────────────────────
// Maps React templates → WordPress template slugs in the FSE template hierarchy
export const templates = [
  { slug: "front-page",  component: "FrontPageTemplate",         path: "/"            },
  { slug: "archive",     component: "ResearchArchiveTemplate",   path: "/research"    },
  { slug: "archive-product", component: "ShopArchiveTemplate",   path: "/shop"        },
  { slug: "page",        component: "PageAbout",                 path: "/about"       },
  { slug: "single",      component: "SinglePostTemplate",        path: "/research/:slug" },
  { slug: "single-product", component: "SingleProductTemplate",  path: "/shop/:slug"  },
  { slug: "cart",        component: "CartTemplate",              path: "/cart"        },
  { slug: "checkout",    component: "CheckoutTemplate",          path: "/checkout"    },
  { slug: "search",      component: "SearchResultsTemplate",     path: "/search"      },
] as const;

// ── Registered Patterns ───────────────────────────────────────────────────────
// Maps React patterns → register_block_pattern() equivalents
export const registeredPatterns = [
  {
    name:        "theme/query-loop-item",
    title:       "Query Loop Item",
    description: "A post card used inside core/query loops. Supports post and product post types.",
    categories:  ["query", "blog", "woocommerce"] satisfies PatternCategory[],
    blockTypes:  ["core/query-loop"],
    component:   "QueryLoopItem",
  },
  {
    name:        "theme/separator-pattern",
    title:       "Torn Paper Separator",
    description: "Decorative section separator with a textured paper background.",
    categories:  ["featured", "banner"] satisfies PatternCategory[],
    blockTypes:  ["core/separator", "core/group"],
    component:   "SeparatorPattern",
  },
  {
    name:        "theme/cover-block-pattern",
    title:       "Cover Block Pattern",
    description: "Page header with a decorative SVG shape overlay.",
    categories:  ["banner", "featured"] satisfies PatternCategory[],
    blockTypes:  ["core/cover"],
    component:   "CoverBlockPattern",
  },
] as const;
