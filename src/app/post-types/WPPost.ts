/** Matches the WordPress REST API shape for posts (wp/v2/posts). */
export interface WPPost {
  id: string;
  slug: string;
  title: string;
  excerpt: string;
  category: string;
  featured_image: string;
  date: string;
}
