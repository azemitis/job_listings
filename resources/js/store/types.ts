import { Job } from "../api/types";

export interface GlobalState {
  isLoggedIn: boolean;
  user: any;
  jobs: Job[];
  skillsSearchTerm: string;
  locationsSearchTerm: string;
  remoteSearchTerm: string;
  selectedOrganizations: string[];
  selectedJobTypes: string[];
  selectedDegrees: string[];
}
