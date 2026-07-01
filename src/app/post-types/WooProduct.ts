/** Matches the WooCommerce REST API shape for products (wc/v3/products). */
export interface WooProduct {
  id: string;
  slug: string;
  title: string;
  price: string;
  category: string;
  featured_image: string;
}
